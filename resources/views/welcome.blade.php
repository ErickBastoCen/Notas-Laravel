<!DOCTYPE html>
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
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Notas</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                <svg
                    width="100%"
                    height="100%"
                    viewBox="0 0 500 150"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve"
                    xmlns:serif="http://www.serif.com/"
                    style="
                    fill-rule: evenodd;
                    clip-rule: evenodd;
                    stroke-miterlimit: 1.5;
                    "
                >
                    <rect
                    id="Mesa-de-trabajo4"
                    serif:id="Mesa de trabajo4"
                    x="0"
                    y="0"
                    width="500"
                    height="150"
                    style="fill: none"
                    />
                    <g>
                    <g>
                        <g>
                        <g id="Capa2">
                            <path
                            d="M82.775,89.986l-9.562,-15.753l-18.702,-0.24c0,0 9.563,15.754 9.563,15.754l18.701,0.239Z"
                            style="fill: none; stroke: #023047; stroke-width: 6px"
                            />
                            <path
                            d="M45.378,89.504l9.133,-15.511c0,0 9.563,15.755 9.563,15.754c0,0.001 -9.135,15.509 -9.135,15.509l-9.561,-15.752Z"
                            style="fill: none; stroke: #023047; stroke-width: 6px"
                            />
                            <path
                            d="M64.074,89.747l-9.135,15.509l18.697,0.245l9.139,-15.515l-18.701,-0.239Z"
                            style="fill: none; stroke: #023047; stroke-width: 6px"
                            />
                        </g>
                        <path
                            d="M71.072,58.44c-3.555,-1.955 -4.912,0.592 -8.244,0.633l-1.686,-5.366c-4.894,0.247 -9.664,1.424 -14.038,3.463l1.445,5.426c-2.909,1.498 -5.543,3.435 -7.807,5.74l-5.093,-2.744c-3.188,3.521 -5.61,7.633 -7.126,12.099l4.97,2.951c-0.905,3.074 -1.299,6.279 -1.168,9.497l-5.517,1.486c0.385,4.733 1.731,9.37 3.96,13.648l5.584,-1.253c1.629,2.849 3.706,5.445 6.155,7.691l-2.709,4.845c3.733,3.172 8.057,5.619 12.726,7.202l2.927,-4.722c3.209,0.955 6.541,1.42 9.872,1.379l1.686,5.366c4.894,-0.247 9.664,-1.423 14.038,-3.463l-1.445,-5.425c2.909,-1.498 5.544,-3.436 7.807,-5.741l5.093,2.744c3.188,-3.521 5.61,-7.632 7.127,-12.099l-4.971,-2.951c0.905,-3.074 1.299,-6.278 1.168,-9.497l5.517,-1.486c-0.385,-4.732 -1.731,-9.37 -3.959,-13.647l-5.585,1.252c-1.629,-2.849 -0.712,-4.696 -3.383,-6.649"
                            style="
                            fill: none;
                            stroke: #023047;
                            stroke-width: 6px;
                            stroke-linecap: square;
                            "
                        />
                        </g>
                        <path
                        d="M69.034,61.836l19.288,-32.745l-8.61,-4.872"
                        style="fill: none; stroke: #023047; stroke-width: 6px"
                        />
                        <path
                        d="M86.255,71.582l19.289,-32.745l8.61,4.872"
                        style="fill: none; stroke: #023047; stroke-width: 6px"
                        />
                    </g>
                    <path
                        d="M132.38,113.192l-0,-49.971l7.193,-0l-0,49.971l-7.193,0Zm6.953,-49.731l-6.713,-0l-0,49.491l6.713,0l0,-49.491Zm-6.953,-0.24l-0,49.971l7.193,0l-0,-49.971l-7.193,-0Z"
                        style="fill: #023047; fill-rule: nonzero"
                    />
                    <path
                        d="M180.545,84.651c-0,-0 -14.296,-0 -14.296,-0c-0.409,-0.035 -0.823,-0.055 -1.241,-0.055c-0.243,-0 -0.484,0.008 -0.725,0.02c-3.574,-0.354 -6.374,-3.377 -6.374,-7.043c-0,-3.903 3.174,-7.078 7.078,-7.078l15.8,0c3.666,0.132 6.627,3.052 6.828,6.702l7.2,-0c-0.067,-2.436 -0.743,-4.719 -1.877,-6.702c-0.002,-0.002 -0.002,-0.005 -0.005,-0.007c-2.409,-4.196 -6.883,-7.056 -12.038,-7.186l-15.908,0c-5.306,0 -9.936,2.897 -12.396,7.193c-1.194,2.086 -1.875,4.503 -1.875,7.078c0,2.575 0.681,4.992 1.875,7.078c0.599,1.045 1.326,2.007 2.16,2.865c2.592,2.668 6.22,4.328 10.236,4.328l15.558,-0c3.903,-0 7.078,3.174 7.078,7.077c-0,3.904 -3.175,7.078 -7.078,7.078l-15.537,0c-3.786,0 -6.886,-2.973 -7.092,-6.708l-7.2,-0c0.067,2.438 0.746,4.723 1.882,6.708c2.467,4.297 7.099,7.193 12.41,7.193l15.537,0c5.306,0 9.935,-2.896 12.395,-7.193c1.194,-2.086 1.875,-4.503 1.875,-7.078c0,-2.575 -0.681,-4.991 -1.875,-7.077c-2.46,-4.297 -7.089,-7.193 -12.395,-7.193Z"
                        style="fill: #023047; fill-rule: nonzero"
                    />
                    <path
                        d="M241.308,105.999c-8.576,0 -15.755,-6.083 -17.452,-14.163c-0.247,-1.184 -0.379,-2.412 -0.379,-3.668c-0,-1.206 0.12,-2.386 0.35,-3.524c1.64,-8.15 8.854,-14.307 17.481,-14.307c7.363,0 13.697,4.486 16.414,10.868l7.624,0c-3.011,-10.432 -12.635,-18.061 -24.038,-18.061c-12.624,0 -23.065,9.348 -24.775,21.5c-0.165,1.15 -0.249,2.328 -0.249,3.524c-0,1.247 0.091,2.472 0.268,3.668c1.775,12.082 12.183,21.356 24.756,21.356c11.12,0 20.547,-7.255 23.803,-17.289l-7.739,-0c-2.884,5.97 -9.001,10.096 -16.064,10.096Z"
                        style="fill: #023047; fill-rule: nonzero"
                    />
                    <path
                        d="M295.381,105.999l-0,-43.063l-7.193,-0l-0,50.256l38.805,0l0,-7.193l-31.612,0Z"
                        style="fill: #023047; fill-rule: nonzero"
                    />
                    <path
                        d="M342.272,113.192l9.502,0l15.817,-28.582l-4.726,-8.622l-20.593,37.204Zm32.452,-41.464l-4.752,-8.584l-0.003,0.005l-4.747,8.579l22.948,41.464l9.504,0l-22.95,-41.464Z"
                        style="fill: #023047; fill-rule: nonzero"
                    />
                    <path
                        d="M465.457,91.906c-0.789,-1.41 -1.808,-2.673 -3.009,-3.738c-0.676,-0.599 -1.411,-1.132 -2.192,-1.596c0.517,-0.625 0.983,-1.293 1.39,-2c0.021,-0.039 0.043,-0.075 0.062,-0.113c1.165,-2.072 1.829,-4.46 1.829,-7.006c0,-2.515 -0.649,-4.879 -1.788,-6.931c-0.034,-0.063 -0.067,-0.125 -0.103,-0.185c-2.47,-4.297 -7.107,-7.193 -12.42,-7.193l-26.446,0l0,7.378l27.99,-0c3.177,0.705 5.557,3.546 5.557,6.931c0,3.517 -2.567,6.445 -5.926,7.006l-20.428,-0l-0,-10.247l-7.193,-0l0,38.98l26.446,0c0.632,0 1.255,-0.042 1.866,-0.122c0.611,0.08 1.234,0.122 1.866,0.122c5.383,0 10.072,-2.971 12.513,-7.363c1.146,-2.057 1.798,-4.428 1.798,-6.948c0,-2.532 -0.656,-4.911 -1.812,-6.975Zm-11.017,13.923l-24.467,-0l-0,-13.923l24.321,-0c3.28,0.626 5.766,3.515 5.766,6.975c-0,3.409 -2.412,6.265 -5.62,6.948Z"
                        style="fill: #023047; fill-rule: nonzero"
                    />
                    </g>
                </svg>
                </div>         
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <a href="{{ route('login') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">¿Qué hacemos en Notas ISCLAB?</h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Proporcionamos una herramienta digital para que los usuarios puedan registrar sus apuntes de las asignaturas en cualquier momento, no dejes pasar el momento y empieza a ser parte de esta gran comunidad.
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>                 
            </div>
        </div>
    </body>
</html>
