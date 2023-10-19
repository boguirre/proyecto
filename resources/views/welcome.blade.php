{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laracasts</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laravel News</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edupit - Education and Online Courses Responsive HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="venobox/venobox.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/plugin_theme_css.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/bd-wizard.css">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

    @include('layouts.header.header-page')

    <!-- Slick SLIDER  AREA -->
    <div class="witr_slick_slider_area slider1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 padding_lr0">
                    <div class="witr_slick_active">
                        <div class="witr_ds_content_area" style="background-image: url(assets/images/slider-bg2.jpg);">
                            <!-- single slider item -->
                            <div class="witr_ds_slider_content witr_slick_content">
                                <div class=" witr_ds_content witr_slick_height text-left">
                                    <div class="witr_ds_content_inner witr_containers">
                                        <h2>Education Is the </h2>
                                        <h3>Backbone of the Nation.</h3>
                                        <p>Get the most of reduction in your team’s operating creates<br> amazing UI/UX
                                            experiences.</p>
                                        <div class="witr_slicks_title">
                                            <h4>EDUPIT</h4>
                                        </div>
                                        <!-- btn gradient style -->
                                        <div class="slider_btn">
                                            <div class="witr_btn_style">
                                                <div class="witr_btn_sinner">
                                                    <a class="witr_btn" href="#">START TRIAL</a>
                                                    <a class="witr_btn active recpwit" href="#">VIEW COURSES</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="witr_slider_thumb em_slider_s2_image">
                                            <div class="witr_slider_thumb_inner">
                                                <img src="assets/images/right-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="witr_ds_content_area" style="background-image: url(assets/images/slider-bg2.jpg);">
                            <!-- single slider item -->
                            <div class="witr_ds_slider_content witr_slick_content">
                                <div class=" witr_ds_content witr_slick_height text-left">
                                    <div class="witr_ds_content_inner witr_containers">
                                        <h2>Education Is the </h2>
                                        <h3>Backbone of the Nation.</h3>
                                        <p>Get the most of reduction in your team’s operating creates<br> amazing UI/UX
                                            experiences.</p>
                                        <div class="witr_slicks_title">
                                            <h4>EDUPIT</h4>
                                        </div>
                                        <!-- btn gradient style -->
                                        <div class="slider_btn">
                                            <div class="witr_btn_style">
                                                <div class="witr_btn_sinner">
                                                    <a class="witr_btn" href="#">START TRIAL</a>
                                                    <a class="witr_btn active recpwit" href="#">VIEW COURSES</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="witr_slider_thumb em_slider_s2_image">
                                            <div class="witr_slider_thumb_inner">
                                                <img src="assets/images/abbut-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- edupit_feature_area -->
    <div class="edupit_feature_area">
        <div class="container">
            <div class="witr_cfeature1 feature_active text-center ">
                <div class="witr_islidess_slick witr_cfeature_idps">
                    <!-- edupit_feature_01-->
                    <div class="col-lg-12">
                        <div class="sub-border-2 all_feature_color ">
                            <div class="sub-item">
                                <img src="assets/images/fi2.png" alt="">
                                <h3><a href="#">Non-resident</a></h3>
                                <h2>Student (100) </h2>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_feature_02-->
                    <div class="col-lg-12">
                        <div class="sub-border-2 all_feature_color ">
                            <div class="sub-item ">
                                <img src="assets/images/fi3.png" alt="">
                                <h3><a href="#">Tuition is free</a></h3>
                                <h2>Student (15)</h2>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_feature_03-->
                    <div class="col-lg-12">
                        <div class="sub-border-2 all_feature_color ">
                            <div class="sub-item ">
                                <img src="assets/images/fi4.png" alt="">
                                <h3><a href="#">Graduate Teacher</a></h3>
                                <h2>Student (40)</h2>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_feature_03-->
                    <div class="col-lg-12">
                        <div class="sub-border-2 all_feature_color ">
                            <div class="sub-item ">
                                <img src="assets/images/fi1.png" alt="">
                                <h3><a href="#">Residential</a></h3>
                                <h2>Student (500) </h2>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_feature_04-->
                    <div class="col-lg-12">
                        <div class="sub-border-2 all_feature_color ">
                            <div class="sub-item ">
                                <img src="assets/images/fi4.png" alt="">
                                <h3><a href="#">Graduate Teacher</a></h3>
                                <h2>Student (40)</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- edupit_about_area -->
    <div class="edupit_about_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single_image_area">
                        <div class="single_image  ">
                            <img src="assets/images/abbut-img.png" alt="">
                            <div class="witr_tx_ovei_title"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="witr_about_title">
                        <div class="witr_section_title_inner text-left">
                            <h2>ALL EDUTIT SCHOOL, ALL THE TIME</h2>
                            <h3>We Are Experts Learning Institution</h3>
                        </div>
                    </div>
                    <div class="about_heading">
                        <h2>On the other hand demo with righteous indignation and dislike men who elit, sed do eiusmod.
                        </h2>
                    </div>
                    <div class="about_contact">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do us mod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit</p>
                    </div>
                    <div class="witr_section2_title">
                        <div class="witr_section_title_inner text-left">
                            <h3>Edupit Success</h3>
                            <div class="witr_bar_main">
                                <div class="witr_bar_inner witr_bar_innerc"></div>
                            </div>
                        </div>
                    </div>
                    <!-- witr_brand_areat -->
                    <div class="row">
                        <div class="col-lg-12 brand_area">
                            <div class="imagess_area wittr_car_top_left">
                                <div class="witr_car_overlay brand_imagess_active">
                                    <div class="slide_items1">
                                        <img src="assets/images/cl1.jpg" alt="" />
                                    </div>
                                    <div class="slide_items1">
                                        <img src="assets/images/cl2.jpg" alt="" />
                                    </div>
                                    <div class="slide_items1">
                                        <img src="assets/images/cl3.jpg" alt="" />
                                    </div>
                                    <div class="slide_items1">
                                        <img src="assets/images/cl4.jpg" alt="" />
                                    </div>
                                    <div class="slide_items1">
                                        <img src="assets/images/cl5.jpg" alt="" />
                                    </div>
                                    <div class="slide_items1">
                                        <img src="assets/images/cl2.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- edupit_all_the_area -->
    <div class="edupit_all_the_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-center">
                            <h2>ALL EDUPIT SCHOOL, ALL THE TIME</h2>
                            <h3>What do you want to learn</h3>
                            <h1>today?</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row time_top">
                <!-- edupit_solution2_01 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="busi_singleblog">
                        <div class="witr_sb_thumb_inner">
                            <a href="#"><img src="assets/images/bo1.jpg" alt=""> </a>
                        </div>
                        <div class="witr_top_category category2">
                            <ul class="post-categories">
                                <li><a href="#">Philosophy</a></li>
                            </ul>
                            <span class="tutor_course"><a href="#"></a></span>
                        </div>
                        <div class="all_blog_color inner_blog">
                            <div class="blog_icon">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span class="rating-count">4.50<i>(2)</i></span>
                            </div>
                            <div class="single_title">
                                <h2><a href="#">The Complete Product Management Course</a></h2>
                            </div>
                            <div class="post_author">
                                <div class="single_author">
                                    <a href="#"> <img src="assets/images/liton-sarkar.jpg" alt=""> </a>
                                </div>
                                <div class="author_name">
                                    <span>by</span>
                                    <a href="#">Liton Sarkar</a>
                                    <span>In</span>
                                    <a href="#/">Marketing </a>
                                </div>
                            </div>
                        </div>
                        <div class="post_course">
                            <div class="loop_price">
                                <div class="price">
                                    <p>Free</p>
                                    <div class="btn_wrap">
                                        <a href="#">Get Enrolled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edupit_solution2_02 -->
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="busi_singleblog">
                        <div class="witr_sb_thumb_inner">
                            <a href="#"><img src="assets/images/bo2.jpg" alt=""> </a>
                        </div>
                        <div class="witr_top_category category2">
                            <ul class="post-categories">
                                <li><a href="#">Intermediate</a></li>
                            </ul>
                            <span class="tutor_course"><a href="#"></a> </span>
                        </div>
                        <div class="all_blog_color inner_blog">
                            <div class="blog_icon">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span class="rating-count">4.50<i>(2)</i></span>
                            </div>
                            <div class="single_title">
                                <h2><a href="#">Complete Tell Fundamental Beginners to Advanced</a></h2>
                            </div>
                            <div class="post_author">
                                <div class="single_author">
                                    <a href="#"> <img src="assets/images/liton-sarkar.jpg" alt=""> </a>
                                </div>
                                <div class="author_name">
                                    <span>by</span>
                                    <a href="#">Liton Sarkar</a>
                                    <span>In</span>
                                    <a href="#/">Marketing </a>
                                </div>
                            </div>
                        </div>
                        <div class="post_course">
                            <div class="loop_price">
                                <div class="price">
                                    <p>Free</p>
                                    <div class="btn_wrap">
                                        <a href="#">Get Enrolled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edupit_solution2_03 -->
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="busi_singleblog">
                        <div class="witr_sb_thumb_inner">
                            <a href="#"><img src="assets/images/bo3.jpg" alt=""> </a>
                        </div>
                        <div class="witr_top_category category2">
                            <ul class="post-categories">
                                <li><a href="#">Beginner</a></li>
                            </ul>
                            <span class="tutor_course"><a href="#"></a> </span>
                        </div>
                        <div class="all_blog_color inner_blog">
                            <div class="blog_icon">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span class="rating-count">4.50<i>(2)</i></span>
                            </div>
                            <div class="single_title">
                                <h2><a href="#">Complete Blender Creator: Learn 3D Modelling</a></h2>
                            </div>
                            <div class="post_author">
                                <div class="single_author">
                                    <a href="#"> <img src="assets/images/liton-sarkar.jpg" alt=""> </a>
                                </div>
                                <div class="author_name">
                                    <span>by</span>
                                    <a href="#">Liton Sarkar</a>
                                    <span>In</span>
                                    <a href="#/">Marketing </a>
                                </div>
                            </div>
                        </div>
                        <div class="post_course">
                            <div class="loop_price">
                                <div class="price">
                                    <p>Free</p>
                                    <div class="btn_wrap">
                                        <a href="#">Get Enrolled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edupit_solution2_04 -->
                <div class="col-lg-4 col-md-6 col-sm-12 pdlf">
                    <div class="busi_singleblog">
                        <div class="witr_sb_thumb_inner">
                            <a href="#"><img src="assets/images/bo4.jpg" alt=""> </a>
                        </div>
                        <div class="witr_top_category category2">
                            <ul class="post-categories">
                                <li><a href="#">All Levels</a></li>
                            </ul>
                            <span class="tutor_course"><a href="#"></a> </span>
                        </div>
                        <div class="all_blog_color inner_blog">
                            <div class="blog_icon">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span class="rating-count">4.50<i>(1)</i></span>
                            </div>
                            <div class="single_title">
                                <h2><a href="#">Nutrition: Build Your Perfect Diet & Meal Plan</a></h2>
                            </div>
                            <div class="post_author">
                                <div class="single_author">
                                    <a href="#"> <img src="assets/images/liton-sarkar.jpg" alt=""> </a>
                                </div>
                                <div class="author_name">
                                    <span>by</span>
                                    <a href="#">Liton Sarkar</a>
                                    <span>In</span>
                                    <a href="#/">Marketing </a>
                                </div>
                            </div>
                        </div>
                        <div class="post_course">
                            <div class="loop_price">
                                <div class="price">
                                    <p>Free</p>
                                    <div class="btn_wrap">
                                        <a href="#">Get Enrolled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edupit_solution2_05 -->
                <div class="col-lg-4 col-md-6 col-sm-12 pdlf">
                    <div class="busi_singleblog">
                        <div class="witr_sb_thumb_inner">
                            <a href="#"><img src="assets/images/bo5.jpg" alt=""> </a>
                        </div>
                        <div class="witr_top_category category2">
                            <ul class="post-categories">
                                <li><a href="#">Philosophy</a></li>
                            </ul>
                            <span class="tutor_course"><a href="#"></a> </span>
                        </div>
                        <div class="all_blog_color inner_blog">
                            <div class="blog_icon">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span class="rating-count">4.50<i>(2)</i></span>
                            </div>
                            <div class="single_title">
                                <h2><a href="#">PHP Beginners – Become a PHP Master</a></h2>
                            </div>
                            <div class="post_author">
                                <div class="single_author">
                                    <a href="#"> <img src="assets/images/liton-sarkar.jpg" alt=""> </a>
                                </div>
                                <div class="author_name">
                                    <span>by</span>
                                    <a href="#">Liton Sarkar</a>
                                    <span>In</span>
                                    <a href="#/">Marketing </a>
                                </div>
                            </div>
                        </div>
                        <div class="post_course">
                            <div class="loop_price">
                                <div class="price">
                                    <p>Free</p>
                                    <div class="btn_wrap">
                                        <a href="#">Get Enrolled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edupit_solution2_06 -->
                <div class="col-lg-4 col-md-6 col-sm-12 pdlf">
                    <div class="busi_singleblog">
                        <div class="witr_sb_thumb_inner">
                            <a href="#"><img src="assets/images/bo1.jpg" alt=""> </a>
                        </div>
                        <div class="witr_top_category category2">
                            <ul class="post-categories">
                                <li><a href="#">Philosophy</a></li>
                            </ul>
                            <span class="tutor_course"><a href="#"></a> </span>
                        </div>
                        <div class="all_blog_color inner_blog">
                            <div class="blog_icon">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span class="rating-count">4.50<i>(2)</i></span>
                            </div>
                            <div class="single_title">
                                <h2><a href="#">HTML for Beginners – Master HTML</a></h2>
                            </div>
                            <div class="post_author">
                                <div class="single_author">
                                    <a href="#"> <img src="assets/images/liton-sarkar.jpg" alt=""> </a>
                                </div>
                                <div class="author_name">
                                    <span>by</span>
                                    <a href="#">Liton Sarkar</a>
                                    <span>In</span>
                                    <a href="#/">Marketing </a>
                                </div>
                            </div>
                        </div>
                        <div class="post_course">
                            <div class="loop_price">
                                <div class="price">
                                    <p>Free</p>
                                    <div class="btn_wrap">
                                        <a href="#">Get Enrolled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- edupit_team_area -->
    <div class="edupit_team_area home1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-left">
                            <h2>Instructors</h2>
                            <h3>What do you want to</h3>
                            <h1>learn today ?</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="witr_team_area_c witr_tps7 team_top">
                <div class="row post_team_idteam ">
                    <!-- edupit_team_01 -->
                    <div class="witr_all_mb_30 col-lg-12 ">
                        <div class="team-part all_color_team ">
                            <div class="witr_team_section">
                                <img src="assets/images/team-02.jpg" alt="">
                            </div>
                            <div class="witr_team_content all_content_bg_color text-center">
                                <h5><a href="#">Chris Anderson </a></h5>
                                <span>PARTNER </span>
                                <div class="team_o_icons all_team_icon_o_color">
                                    <ul class="witr_pots_team_s">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_team_02 -->
                    <div class="witr_all_mb_30 col-lg-12 ">
                        <div class="team-part all_color_team ">
                            <div class="witr_team_section">
                                <img src="assets/images/team-01.jpg" alt="">
                            </div>
                            <div class="witr_team_content all_content_bg_color text-center">
                                <h5><a href="#">Ethan J.Cooper </a></h5>
                                <span>MANAGING PARTNER </span>
                                <div class="team_o_icons all_team_icon_o_color">
                                    <ul class="witr_pots_team_s">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_team_03 -->
                    <div class="witr_all_mb_30 col-lg-12 ">
                        <div class="team-part all_color_team ">
                            <div class="witr_team_section">
                                <img src="assets/images/team-02.jpg" alt="">
                            </div>
                            <div class="witr_team_content all_content_bg_color text-center">
                                <h5><a href="#">Russel Smith </a></h5>
                                <span>PRODUCT OFFICER </span>
                                <div class="team_o_icons all_team_icon_o_color">
                                    <ul class="witr_pots_team_s">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_team_04 -->
                    <div class="witr_all_mb_30 col-lg-12 ">
                        <div class="team-part all_color_team ">
                            <div class="witr_team_section">
                                <img src="assets/images/team-01.jpg" alt="">
                            </div>
                            <div class="witr_team_content all_content_bg_color text-center">
                                <h5><a href="#">Ethan Cooper </a></h5>
                                <span>MANAGING PARTNER </span>
                                <div class="team_o_icons all_team_icon_o_color">
                                    <ul class="witr_pots_team_s">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="my-5">
        <div class="container">
            <div id="wizard">
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-account-outline"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Personal Details</div>
                            <div class="bd-wizard-step-subtitle">Step 1</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading">Enter your Personal details </h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstName" class="sr-only">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="form-control"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName" class="sr-only">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="form-control"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="phoneNumber" class="sr-only">Phone Number</label>
                                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"
                                    placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emailAddress" class="sr-only">Email Address</label>
                                <input type="email" name="emailAddress" id="emailAddress" class="form-control"
                                    placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-bank"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Employ Details</div>
                            <div class="bd-wizard-step-subtitle">Step 2</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading">Enter your Employment details </h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="designation" class="sr-only">Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control"
                                    placeholder="Designation">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department" class="sr-only">Department</label>
                                <input type="text" name="department" id="department" class="form-control"
                                    placeholder="Department">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="employeeNumber" class="sr-only">Employee Number</label>
                                <input type="text" name="employeeNumber" id="employeeNumber" class="form-control"
                                    placeholder="Employee Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="workEmailAddress" class="sr-only">Work Email Address</label>
                                <input type="email" name="workEmailAddress" id="workEmailAddress"
                                    class="form-control" placeholder="Work Email Address">
                            </div>
                        </div>
                    </div>
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-account-check-outline"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Review </div>
                            <div class="bd-wizard-step-subtitle">Step 3</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading mb-5">Review your Details</h4>
                        <h6 class="font-weight-bold">Personal Details</h6>
                        <p class="mb-4"><span id="enteredFirstName">Cha</span> <span id="enteredLastName">Ji-Hun
                                C</span> <br>
                            Phone: <span id="enteredPhoneNumber">+230-582-6609</span> <br>
                            Email: <span id="enteredEmailAddress">willms_abby@gmail.com</span></p>
                        <h6 class="font-weight-bold">Employment Details</h6>
                        <p class="mb-0"><span id="enteredDesignation">Junior Developer</span> - <span
                                id="enteredDepartment">UI Development</span> <br>
                            Phone: <span id="enteredEmployeeNumber">JDUI36849</span> <br>
                            Email: <span id="enteredWorkEmailAddress">willms_abby@company.com</span></p>
                    </div>
                </section>
                <h3>
                    <div class="media">
                        <div class="bd-wizard-step-icon"><i class="mdi mdi-emoticon-outline"></i></div>
                        <div class="media-body">
                            <div class="bd-wizard-step-title">Submit</div>
                            <div class="bd-wizard-step-subtitle">Step 4</div>
                        </div>
                    </div>
                </h3>
                <section>
                    <div class="content-wrapper">
                        <h4 class="section-heading mb-5">Accept agreement and Submit</h4>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id=""
                                    value="checkedValue" checked>
                                I hereby declare that I had read all the <a href="#!">terms and conditions</a> and
                                all the details provided my me in this form are true.
                            </label>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>


    <!-- edupit_feature2_area -->
    <div class="edupit_feature2_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-center">
                            <h2>OUR SCHOOL FACILITY</h2>
                            <h3>All the benefits you get in our</h3>
                            <h1>education program !</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row feature2_top">
                <!-- edupit_feature2_01 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr1.jpg" alt="">
                            <h3><a href="#">Computer Science</a></h3>
                            <p>01 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_02 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr2.jpg" alt="">
                            <h3><a href="#">Development</a></h3>
                            <p>42 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_03 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr3.jpg" alt="">
                            <h3><a href="#">Chemistry</a></h3>
                            <p>15 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_04 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr4.jpg" alt="">
                            <h3><a href="#">Architecture</a></h3>
                            <p>05 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_05 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr5.jpg" alt="">
                            <h3><a href="#">Physics</a></h3>
                            <p>07 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_06 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr6.jpg" alt="">
                            <h3><a href="#">Islamic History</a></h3>
                            <p>15 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_07 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr7.jpg" alt="">
                            <h3><a href="#">Political Science</a></h3>
                            <p>12 Courses </p>
                        </div>
                    </div>
                </div>
                <!-- edupit_feature2_08 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="sub_item_feature">
                        <div class="sub-item all_feature_color  text-center ">
                            <img src="assets/images/pr8.jpg" alt="">
                            <h3><a href="#">Philosophy</a></h3>
                            <p>01 Courses </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- edupit_blog_area -->
    <div class="edupit_blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-left">
                            <h2>NEWS</h2>
                            <h3>All the benefits you get in our</h3>
                            <h1>latest news & blog</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="witr_blog_area13 witr_blog_area14">
                <div class="blog_wrap blog14_idblog1 blog_top">
                    <!-- edupit_blog_01 -->
                    <div class="witr_all_mb_30 col-md-12 col-xs-12 col-sm-12 ">
                        <div class="busi_singleBlog">
                            <div class="witr_sb_thumb">
                                <a href="#"> <img src="assets/images/blog-thumb-01.jpg" alt=""> </a>
                                <div class="witr_top_category">
                                    <ul class="post-categories">
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="all_blog_color">
                                <div class="witr_blog_con bs5">
                                    <h2><a href="single-blog.html">Transforming our in scienc facilities</a></h2>
                                    <div class="witr_blog_meta_potion14">
                                        <span><i class="icofont-tags"></i><a href="#">Architecture</a></span>
                                        <span><a href="#"><i class="icofont-ui-clock"></i></a> 05 May
                                            2021</span>
                                    </div>
                                    <div class="learn_more_adn">
                                        <a class="learn_btn adnbtn2" href="#">VIEW More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_blog_02 -->
                    <div class="witr_all_mb_30 col-md-12 col-xs-12 col-sm-12 ">
                        <div class="busi_singleBlog">
                            <div class="witr_sb_thumb">
                                <a href="#"> <img src="assets/images/blog-thumb-02.jpg" alt=""> </a>
                                <div class="witr_top_category">
                                    <ul class="post-categories">
                                        <li><a href="#">Chemistry</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="all_blog_color">
                                <div class="witr_blog_con bs5">
                                    <h2><a href="single-blog.html">We believe everyone has capacity is a place</a></h2>
                                    <div class="witr_blog_meta_potion14">
                                        <span><i class="icofont-tags"></i><a href="#">Chemistry</a></span>
                                        <span><a href="#"><i class="icofont-ui-clock"></i></a> 05 May
                                            2021</span>
                                    </div>
                                    <div class="learn_more_adn">
                                        <a class="learn_btn adnbtn2" href="#">VIEW More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_blog_03 -->
                    <div class="witr_all_mb_30 col-md-12 col-xs-12 col-sm-12 ">
                        <div class="busi_singleBlog">
                            <div class="witr_sb_thumb">
                                <a href="#"> <img src="assets/images/blog-thumb-03.jpg" alt=""> </a>
                                <div class="witr_top_category">
                                    <ul class="post-categories">
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="all_blog_color">
                                <div class="witr_blog_con bs5">
                                    <h2><a href="single-blog.html">How will you know success when it shows</a></h2>
                                    <div class="witr_blog_meta_potion14">
                                        <span><i class="icofont-tags"></i><a href="#">Architecture</a></span>
                                        <span><a href="#"><i class="icofont-ui-clock"></i></a> 05 May
                                            2021</span>
                                    </div>
                                    <div class="learn_more_adn">
                                        <a class="learn_btn adnbtn2" href="#">VIEW More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_blog_04 -->
                    <div class="witr_all_mb_30 col-md-12 col-xs-12 col-sm-12 ">
                        <div class="busi_singleBlog">
                            <div class="witr_sb_thumb">
                                <a href="#"> <img src="assets/images/blog-thumb-04.jpg" alt=""> </a>
                                <div class="witr_top_category">
                                    <ul class="post-categories">
                                        <li><a href="#">Philosophy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="all_blog_color">
                                <div class="witr_blog_con bs5">
                                    <h2><a href="single-blog.html">Where people develop the own potential</a></h2>
                                    <div class="witr_blog_meta_potion14">
                                        <span><i class="icofont-tags"></i><a href="#">Philosophy</a></span>
                                        <span><a href="#"><i class="icofont-ui-clock"></i></a> 05 May
                                            2021</span>
                                    </div>
                                    <div class="learn_more_adn">
                                        <a class="learn_btn adnbtn2" href="#">VIEW More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edupit_blog_05 -->
                    <div class="witr_all_mb_30 col-md-12 col-xs-12 col-sm-12 ">
                        <div class="busi_singleBlog">
                            <div class="witr_sb_thumb">
                                <a href="#"> <img src="assets/images/blog-thumb-05.jpg" alt=""> </a>
                                <div class="witr_top_category">
                                    <ul class="post-categories">
                                        <li><a href="#">Physics</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="all_blog_color">
                                <div class="witr_blog_con bs5">
                                    <h2><a href="single-blog.html">We believe everyone has capacity is a place</a></h2>
                                    <div class="witr_blog_meta_potion14">
                                        <span><i class="icofont-tags"></i><a href="#">Physics</a></span>
                                        <span><a href="#"><i class="icofont-ui-clock"></i></a> 05 May
                                            2021</span>
                                    </div>
                                    <div class="learn_more_adn">
                                        <a class="learn_btn adnbtn2" href="#">VIEW More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- edupit_testimonial_area -->
    <div class="edupit_testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single_image_area">
                        <div class="single_image  ">
                            <img src="assets/images/testimonial.png" alt="">
                            <div class="witr_tx_ovei_title"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-center">
                            <h2>Testimonail</h2>
                            <h3>What our students have to say from real students</h3>
                        </div>
                    </div>
                    <div class="carso_idtesti tshover testomonial-slide">
                        <!-- edupit_testimonial_01 -->
                        <div class="witr_testi_itemt testi-width all_color_testimonial">
                            <div class="em_single_testimonial witr_testi_s_9">
                                <div class="test-part mt-50 ">
                                    <ul>
                                        <li>
                                            <div class="em_crating">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="em_testi_content">
                                    <div class="em_testi_text">
                                        <p>People who build their own home tend to be very courageous. These people are
                                            curious about life. hey're thinking about</p>
                                    </div>
                                </div>
                                <div class="em_test_thumb">
                                    <img src="assets/images/team-01.jpg" alt="">
                                </div>
                                <div class="em_testi_title">
                                    <h2>junction Raque <span>Teacher</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- edupit_testimonial_02 -->
                        <div class="witr_testi_itemt testi-width all_color_testimonial">
                            <div class="em_single_testimonial witr_testi_s_9">
                                <div class="test-part mt-50 ">
                                    <ul>
                                        <li>
                                            <div class="em_crating">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="em_testi_content">
                                    <div class="em_testi_text">
                                        <p>People who build their own home tend to be very courageous. These people are
                                            curious about life. hey're thinking about</p>
                                    </div>
                                </div>
                                <div class="em_test_thumb">
                                    <img src="assets/images/team-02.jpg" alt="">
                                </div>
                                <div class="em_testi_title">
                                    <h2>Kori Anderson <span>Teacher</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- edupit_testimonial_03 -->
                        <div class="witr_testi_itemt testi-width all_color_testimonial">
                            <div class="em_single_testimonial witr_testi_s_9">
                                <div class="test-part mt-50 ">
                                    <ul>
                                        <li>
                                            <div class="em_crating">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="em_testi_content">
                                    <div class="em_testi_text">
                                        <p>People who build their own home tend to be very courageous. These people are
                                            curious about life. hey're thinking about</p>
                                    </div>
                                </div>
                                <div class="em_test_thumb">
                                    <img src="assets/images/team-01.jpg" alt="">
                                </div>
                                <div class="em_testi_title">
                                    <h2>Liton sarkar <span>Designer</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- edupit_testimonial_04 -->
                        <div class="witr_testi_itemt testi-width all_color_testimonial">
                            <div class="em_single_testimonial witr_testi_s_9">
                                <div class="test-part mt-50 ">
                                    <ul>
                                        <li>
                                            <div class="em_crating">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="em_testi_content">
                                    <div class="em_testi_text">
                                        <p>People who build their own home tend to be very courageous. These people are
                                            curious about life. hey're thinking about</p>
                                    </div>
                                </div>
                                <div class="em_test_thumb">
                                    <img src="assets/images/team-02.jpg" alt="">
                                </div>
                                <div class="em_testi_title">
                                    <h2>David jection <span>Designer</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- edupit_page_area -->
    <div class="edupit_page_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-center">
                            <h2>ONLINE PAGE</h2>
                            <h3>What do you want to learn</h3>
                            <h1>today ?</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row page_top">
                <!-- edupit_page_01 -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="witr_service2_7 service2_8 all_service2_color ">
                        <div class="witr_2service_content">
                            <!-- image -->
                            <div class="witr_service7s_image">
                                <img src="assets/images/le1.jpg" alt="">
                            </div>
                            <div class="witr_titles_content">
                                <h2>2021-2022 . . . .</h2>
                                <h3><a href="#">Admission to our school is going on.</a></h3>
                                <div class="witr_ser_btnb witr_btn_all_color">
                                    <a class="pluse_btn1" href="#">Apply Now</a>
                                    <div class="pluse_btn">
                                        <span class="icofont-plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edupit_page_02 -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="witr_service2_7 service2_8 all_service2_color ">
                        <div class="witr_2service_content">
                            <!-- image -->
                            <div class="witr_service7s_image">
                                <img src="assets/images/le2.jpg" alt="">
                            </div>
                            <div class="witr_titles_content">
                                <h2>Notice . . . .</h2>
                                <h3><a href="#">Notice board for our next plan</a></h3>
                                <div class="witr_ser_btnb witr_btn_all_color">
                                    <a class="pluse_btn1" href="#">Notice Page</a>
                                    <div class="pluse_btn">
                                        <span class="icofont-plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- witr_shortcode_area -->
    <div class="witr_shortcode_area">
        <div class="container ">
            <div class="row witr_shortcode_inner">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shortcode_content">
                        <h2>Our Newsletter</h2>
                        <p>Stay in the know on the new free e-book</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="witr_shortcode_form">
                        <form>
                            <div class="mc4wp-form-fields">
                                <p>
                                    <input type="email" name="EMAIL" placeholder="Your email address">
                                    <button type="submit">
                                        <i class="fa fa-send"></i>
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer.footer-page')

    <!-- Include All JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.nivo.slider.pack.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="venobox/venobox.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/BeerSlider.js"></script>
    <script src="assets/js/theme-pluginjs.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="assets/js/bd-wizard.js"></script>

</body>

</html>
