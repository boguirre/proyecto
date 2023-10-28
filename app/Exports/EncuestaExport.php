<?php

namespace App\Exports;

use App\Models\Encuestado;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EncuestaExport implements FromCollection, Responsable, WithMapping, WithCustomStartCell, ShouldAutoSize, WithStyles
{
    use Exportable;

    private $fileName = 'encuestados.xlsx';
    private $writerType = Excel::XLSX;

    public function collection()
    {
        return Encuestado::all();
    }

    public function startCell(): string
    {
        return 'C4';
    }

    // public function headings(): array
    // {
    //     return [
    //         'Genero',
    //         'Edad',
    //         'Años Trabajando en la Compañia',
    //         'Area'
    //     ];
    // }

    public function map($encuestado): array
    {
        $fechaNacimiento = Carbon::parse($encuestado->fec_nac_encuestado);
        $edad = $fechaNacimiento->age;

        $fechaIngreso = Carbon::parse($encuestado->fec_ing_encuestado);
        $hoy = Carbon::now();
        $antiguedad = $fechaIngreso->diffInYears($hoy);

        return [
            $encuestado->genero->descripcion,
            $edad,
            $antiguedad,
            $encuestado->area->descripcion
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Encuestados');
        // $sheet->mergeCells('B2:F2');
        $sheet->setCellValue('B4', 'Genero');
        $sheet->setCellValue('C3', 'Masculino');
        $sheet->setCellValue('D3', 'Femenino');
        $sheet->setCellValue('E3', 'Otros');
        $sheet->setCellValue('F3', 'Prefiero no decir');

        $sheet->getStyle('C3:F3')->applyFromArray([
            'font' => [
                'bold' => true,
                'name' => 'Arial',
            ],
            'aligment' => [
                'horizontal' => 'center'
            ],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => [
                    'argb' => 'C5D9F1'
                ]
            ]
        ]);

        $sheet->getStyle('B4')->applyFromArray([
            'font' => [
                'bold' => true,
                'name' => 'Arial',
            ],
            'aligment' => [
                'horizontal' => 'center'
            ],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => [
                    'argb' => 'C5D9F1'
                ]
            ]
        ]);

        $sheet->getStyle('C4:F' . $sheet->getHighestRow())->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ]
            ]
        ]);

        $sheet->getStyle('C3:F3')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ]
            ]
        ]);

        $sheet->getStyle('B4')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ]
            ]
        ]);

        $sheet->getStyle('B4')->applyFromArray([]);

    }
}
