<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/css/stylecreator.css') }}">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100;400&family=Salsa&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar fixed-top justify-content-between">
        <div class="logo">
            <img src="{{ asset('style/assets/logo.svg') }}" width="40" height="" class="d-inline-block align-top" alt="">
            <a class="brand" href="#">
             Beli.in
        </a>
        </div>
        <a class="profile" href="#">
            <img src="{{ asset('style/assets/profile.svg') }}" width="40" height="" class="d-inline-block align-top" alt="">
        </a>
    </nav>
	<div class="sidebarhp" onclick="openNav()">
	-
	</div>
	<div class="sidebarpc" id="sidebarpc" onclick="closeNav()">
	-
	</div>
    <div class="wrapper">
        <nav class="sidebar" id="sidebar">

            <ul class="list-unstyled components">
                <li>
                    <a id="sidebara" href="#"><svg width="30" height="" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.0625 3.70119C23.7792 3.82815 20.7714 6.82619 12.9296 14.7949C7.0312 20.791 2.09956 25.8594 1.98237 26.0547C1.47456 26.8848 1.63081 27.9785 2.35347 28.7012C3.03706 29.3848 4.01362 29.5313 4.89253 29.0918C5.10737 28.9844 8.83784 25.2637 14.1503 19.8535C19.0527 14.8731 23.2519 10.625 23.496 10.4297C24.2187 9.83401 25.0878 9.71682 25.9179 10.1074C26.1523 10.2246 29.4042 13.4668 35.4101 19.5703C42.3925 26.6699 44.6582 28.9258 45.0488 29.1309C45.4882 29.375 45.6347 29.4043 46.1425 29.3653C46.8945 29.3067 47.4804 29.0137 47.8515 28.4961C48.4082 27.7344 48.4668 26.8067 48.0175 26.0645C47.9003 25.8594 44.3359 22.168 40.0976 17.8516C27.7343 5.27346 26.3574 3.89651 25.9277 3.70119C25.4199 3.46682 24.58 3.46682 24.0625 3.70119Z" fill="black"/>
                        <path d="M24.4336 13.3984C24.3066 13.4668 20.6445 17.1484 16.2988 21.5723L8.39844 29.6191V37.6562C8.39844 43.2324 8.42773 45.7617 8.50586 45.9277C8.56445 46.0547 8.73047 46.2305 8.88672 46.3184C9.13086 46.4648 9.69727 46.4844 14.6191 46.4844C19.502 46.4844 20.0977 46.4648 20.3027 46.3281C20.791 45.9863 20.8008 45.8496 20.8008 40.957V36.4062L21.1328 36.0742L21.4648 35.7422H25H28.5352L28.8672 36.0742L29.1992 36.4062V40.957C29.1992 45.8496 29.209 45.9863 29.6973 46.3281C29.9023 46.4648 30.498 46.4844 35.3711 46.4844C39.0723 46.4844 40.8887 46.4551 41.0449 46.377C41.1719 46.3184 41.3477 46.1523 41.4355 45.9961C41.5918 45.7422 41.6016 45.0098 41.6016 37.6758V29.6387L38.7402 26.7578C37.168 25.1758 33.5449 21.5137 30.6934 18.6133C25.6055 13.457 25.498 13.3594 25.0879 13.3105C24.8438 13.291 24.5605 13.3301 24.4336 13.3984Z" fill="black"/>
                    </svg>
                    <div class="sidebaricon " id="sidebartext">Homepage</div></a>
                </li>
                <li>
                    <a id="sidebara1" href="#">
                        <svg width="30" height="" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.9532 4.70702C23.9454 5.21484 20.6836 6.89453 18.4571 9.10156C13.6133 13.8672 12.3243 21.3867 15.3321 27.3437L16.0547 28.7695L10.6837 34.1601C7.73443 37.1289 5.17584 39.8242 5.00006 40.1758C4.60943 40.9375 4.5899 42.6172 4.96099 43.3203C5.27349 43.9258 6.1524 44.7656 6.7774 45.0976C7.4024 45.4101 9.10162 45.3515 9.82428 45C10.1758 44.8242 12.8711 42.2656 15.8399 39.3164L21.2305 33.9453L22.6563 34.668C24.9415 35.8203 26.6407 36.1914 29.5899 36.1914C32.5782 36.1914 34.2383 35.8203 36.6407 34.6094C40.7422 32.5586 43.6719 28.9648 44.961 24.4922C45.5274 22.4609 45.586 18.5547 45.0391 16.6016C42.793 8.41796 35.0977 3.35937 26.9532 4.70702ZM32.4024 9.39453C34.8633 9.99999 37.4024 11.7773 38.8868 13.9648C42.0118 18.5351 41.4649 24.5312 37.5782 28.3984C35.4493 30.5469 32.6368 31.6992 29.5899 31.6992C24.4727 31.6992 20.1172 28.3789 18.6329 23.3398C18.1836 21.7773 18.1836 19.043 18.6329 17.4805C20.1758 12.2461 24.961 8.74999 30.1563 9.10156C30.8985 9.14062 31.8946 9.27734 32.4024 9.39453Z" fill="black"/>
                        <path d="M30.3516 11.8945C29.7852 12.1484 29.1016 13.0469 29.1016 13.5547C29.1016 14.4531 29.8047 15.1758 30.9766 15.5273C32.5 15.9766 33.9258 17.3828 34.5312 19.1016C34.9805 20.293 35.6055 20.8984 36.4062 20.8984C37.4805 20.8984 38.418 19.6289 38.1836 18.4961C37.4805 15.1758 32.5195 10.9961 30.3516 11.8945Z" fill="black"/>
                        </svg> <div class="sidebaricon " id="sidebartext1">Explore</div>
                    </a>
                </li>
                <li  class="active">
                    <a id="sidebara2" href="#">
                        <svg width="30" height="" viewBox="0 0 53 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M41.9631 46.5862C41.6007 46.3305 41.1212 46.4498 40.8915 46.8531C38.9526 50.2548 35.6377 52.2858 32.0239 52.2858H12.0458C6.25986 52.2858 1.55273 47.0453 1.55273 40.6044V19.8919C1.55273 19.4147 1.20499 19.0276 0.776367 19.0276C0.347748 19.0276 0 19.4147 0 19.8919V40.6044C0 47.9987 5.40384 54.0143 12.0458 54.0143H32.0239C36.1722 54.0143 39.9777 51.6831 42.2024 47.7791C42.4321 47.3762 42.325 46.8419 41.9631 46.5862ZM35.1375 23.6194L29.2181 30.2094C28.9148 30.547 28.9148 31.0944 29.2181 31.4315C29.3693 31.6003 29.5683 31.685 29.7668 31.685C29.9653 31.685 30.1643 31.6003 30.3159 31.4315L36.2353 24.842C36.5386 24.5044 36.5386 23.957 36.2353 23.6194C35.9325 23.2823 35.4408 23.2823 35.1375 23.6194ZM51.8767 9.2201L49.1707 6.2078C47.673 4.54005 45.2355 4.54005 43.7378 6.2078L40.9287 9.33488C38.6465 6.54045 35.448 4.95508 32.0239 4.95508H12.0458C9.27476 4.95508 6.5692 6.02865 4.42731 7.97773C2.31576 9.8989 0.838638 12.5831 0.268898 15.535C0.178726 16.0018 0.445602 16.4614 0.864922 16.5618C0.919914 16.5744 0.974907 16.5811 1.02869 16.5811C1.38695 16.5811 1.70882 16.3039 1.78686 15.8983C2.28341 13.328 3.56967 10.9905 5.4099 9.31598C7.27521 7.61852 9.63181 6.68359 12.0458 6.68359H32.0239C35.0307 6.68359 37.8382 8.08711 39.8293 10.5588L31.5731 19.7496H9.92335C9.49432 19.7496 9.14658 20.1363 9.14658 20.6139C9.14658 21.091 9.49432 21.4782 9.92335 21.4782H30.0203L26.2978 25.6216H9.92335C9.49432 25.6216 9.14658 26.0088 9.14658 26.4864C9.14658 26.9635 9.49432 27.3506 9.92335 27.3506H24.7451L19.9292 32.7117C18.5337 34.2651 17.3918 36.0567 16.5358 38.0363L14.326 43.1467C13.7146 44.5615 13.9637 46.1928 14.9608 47.3028C15.5949 48.0086 16.4185 48.3777 17.2612 48.3777C17.7432 48.3777 18.2317 48.2566 18.6939 48.0091L20.9211 46.8158C20.9215 46.8153 20.9223 46.8153 20.9227 46.8149L23.285 45.5495C25.0629 44.5966 26.6723 43.3254 28.0681 41.772L42.5174 25.6869V40.6044C42.5174 41.551 42.4155 42.4922 42.2146 43.4024C42.1123 43.866 42.367 44.3337 42.7835 44.4476C42.8458 44.4647 42.908 44.4728 42.9691 44.4728C43.3185 44.4728 43.6355 44.209 43.7224 43.8147C43.9533 42.77 44.0702 41.6896 44.0702 40.6044V23.9584L46.2282 21.556C46.2286 21.5556 46.2286 21.5556 46.2286 21.5551C46.229 21.5551 46.229 21.5551 46.229 21.5547L51.8767 15.2681C53.3744 13.6004 53.3744 10.8874 51.8767 9.2201ZM18.0206 46.4516C17.2103 46.886 16.476 46.5448 16.0587 46.0807C15.6418 45.6162 15.3353 44.7987 15.7255 43.8966L16.3805 42.381C16.9272 42.8676 17.4577 43.3952 17.9644 43.9592C18.4711 44.5232 18.945 45.1138 19.3821 45.7224L18.0206 46.4516ZM22.6113 43.9921L20.8147 44.9545C20.2822 44.1856 19.6955 43.4416 19.0622 42.7371C18.429 42.0322 17.7606 41.3786 17.0704 40.7862L17.9349 38.7863C18.5317 37.4066 19.2806 36.1278 20.169 34.9691L26.0402 41.5051C24.9994 42.4936 23.8506 43.3277 22.6113 43.9921ZM27.1741 40.3226L21.2312 33.707L38.6388 14.3282L44.5817 20.9438L27.1741 40.3226ZM45.6799 19.7217L39.7371 13.1061L41.6537 10.9725L47.597 17.5881L45.6799 19.7217ZM50.7789 14.0455L48.6948 16.3655L42.752 9.74991L44.8356 7.42992C45.282 6.93297 45.8679 6.68494 46.4543 6.68494C47.0402 6.68494 47.6265 6.93297 48.0725 7.42992L50.7785 10.4422C51.6709 11.4357 51.6709 13.0521 50.7789 14.0455ZM9.92335 15.6057H34.1468C34.5754 15.6057 34.9232 15.219 34.9232 14.7414C34.9232 14.2639 34.5754 13.8772 34.1468 13.8772H9.92335C9.49432 13.8772 9.14658 14.2639 9.14658 14.7414C9.14658 15.219 9.49432 15.6057 9.92335 15.6057Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="53" height="59" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg> <div class="sidebaricon " id="sidebartext2">My Posts</div>
                    </a>
                </li>
                <li>
                    <a id="sidebara3" href="#">
                        <svg width="30" height="" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 47.2183C25.2597 47.2183 24.5459 46.9604 23.9897 46.492C21.8891 44.7258 19.8638 43.066 18.0769 41.6019L18.0678 41.5943C12.829 37.3016 8.3051 33.5945 5.15746 29.9427C1.63888 25.8602 0 21.9894 0 17.7608C0 13.6524 1.46512 9.86214 4.12518 7.08771C6.81697 4.28047 10.5105 2.73438 14.5266 2.73438C17.5282 2.73438 20.2772 3.64685 22.6968 5.44624C23.9179 6.35452 25.0248 7.46613 26 8.76274C26.9755 7.46613 28.082 6.35452 29.3035 5.44624C31.7231 3.64685 34.4721 2.73438 37.4737 2.73438C41.4894 2.73438 45.1833 4.28047 47.8751 7.08771C50.5352 9.86214 51.9999 13.6524 51.9999 17.7608C51.9999 21.9894 50.3614 25.8602 46.8428 29.9423C43.6952 33.5945 39.1717 37.3013 33.9337 41.5936C32.1437 43.0599 30.1152 44.7224 28.0098 46.4928C27.454 46.9604 26.7398 47.2183 26 47.2183ZM14.5266 5.6633C11.3714 5.6633 8.47292 6.87408 6.36431 9.07288C4.22436 11.3049 3.04568 14.3902 3.04568 17.7608C3.04568 21.3173 4.42034 24.498 7.50252 28.0739C10.4815 31.5304 14.9126 35.1612 20.0431 39.3654L20.0526 39.373C21.8462 40.8428 23.8794 42.5091 25.9956 44.2883C28.1244 42.5056 30.1608 40.8367 31.958 39.3646C37.0881 35.1604 41.5188 31.5304 44.4978 28.0739C47.5796 24.498 48.9542 21.3173 48.9542 17.7608C48.9542 14.3902 47.7755 11.3049 45.6356 9.07288C43.5274 6.87408 40.6285 5.6633 37.4737 5.6633C35.1624 5.6633 33.0403 6.36978 31.1665 7.76291C29.4967 9.00497 28.3335 10.5751 27.6515 11.6737C27.3008 12.2387 26.6835 12.5759 26 12.5759C25.3164 12.5759 24.6991 12.2387 24.3484 11.6737C23.6668 10.5751 22.5036 9.00497 20.8334 7.76291C18.9596 6.36978 16.8375 5.6633 14.5266 5.6633Z" fill="black"/>
                            </svg> <div class="sidebaricon " id="sidebartext3">Supporters</div>
                    </a>
                </li>
                <li>
                    <a id="sidebara4" href="#">
                        <svg width="30" height="" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M37.2326 14.1755C35.6971 12.6309 33.6567 11.7904 31.4926 11.8009C29.3285 11.8219 27.3087 12.694 25.7938 14.2596C24.279 15.8251 23.4546 17.9056 23.4649 20.1121C23.4649 20.4588 23.7431 20.7425 24.0832 20.7425C24.4233 20.7425 24.7015 20.4588 24.7015 20.1121C24.6912 18.2418 25.3919 16.4871 26.6698 15.1527C27.9476 13.8183 29.6686 13.0828 31.5029 13.0723C33.3372 13.0617 35.0582 13.7762 36.3669 15.0791C37.6757 16.382 38.397 18.1367 38.4074 20.007C38.4177 21.8773 37.7169 23.632 36.4391 24.9664C35.1612 26.3008 33.4403 27.0364 31.606 27.0469C31.2659 27.0469 30.9876 27.3306 30.9876 27.6773C30.9876 28.024 31.2659 28.3077 31.606 28.3077C33.77 28.2867 35.7898 27.4146 37.3047 25.849C38.8196 24.2835 39.6646 22.1925 39.644 19.986C39.6234 17.7795 38.768 15.7201 37.2326 14.1755Z" fill="black"/>
                            <path d="M49.5885 23.5689L47.6717 22.7598C47.9706 20.9421 47.9706 19.1138 47.6717 17.3066L49.5885 16.4975C50.1347 16.2769 50.5778 15.8356 50.8045 15.2577C51.0415 14.6798 51.0415 14.0493 50.8045 13.4714L49.7328 10.8236C49.4957 10.2457 49.0629 9.80443 48.4961 9.56276C47.9294 9.32109 47.3111 9.32109 46.7443 9.56276L44.8275 10.3718C43.7867 8.87979 42.5192 7.5874 41.0455 6.51567L41.839 4.56133C42.3234 3.37401 41.7669 2.00807 40.6024 1.51423L38.0158 0.421484C36.8513 -0.0723553 35.5117 0.495034 35.0273 1.68235L34.2338 3.63669C32.451 3.33198 30.6579 3.33198 28.8854 3.63669L28.0919 1.68235C27.8549 1.10445 27.4221 0.66315 26.8553 0.421484C26.2885 0.179818 25.6702 0.179818 25.1034 0.421484L22.5169 1.51423C21.9501 1.7559 21.5173 2.1972 21.2802 2.7751C21.0432 3.353 21.0432 3.98343 21.2802 4.56133L22.0737 6.51567C20.6104 7.5769 19.3429 8.86928 18.2917 10.3718L16.375 9.56276C15.8082 9.32109 15.1899 9.32109 14.6231 9.56276C14.0563 9.80443 13.6235 10.2457 13.3865 10.8236L12.3044 13.4609C11.8201 14.6483 12.3766 16.0142 13.5411 16.508L15.9216 17.5167C16.241 17.6533 16.6017 17.4957 16.7254 17.1805C16.8593 16.8548 16.7047 16.487 16.3956 16.3609L14.0151 15.3522C13.4792 15.1211 13.2216 14.5012 13.4483 13.9548L14.5201 11.3175C14.7365 10.7711 15.3548 10.5084 15.8906 10.7396L18.2711 11.7483C18.5391 11.8638 18.8585 11.7693 19.0234 11.5171C20.1261 9.83595 21.5276 8.40697 23.1661 7.2932C23.4134 7.12509 23.5061 6.80987 23.3928 6.52618L22.4035 4.09901C22.3004 3.83633 22.3004 3.54213 22.4035 3.27945C22.5065 3.01677 22.7127 2.80662 22.9703 2.70155L25.5672 1.6088C25.8248 1.50373 26.1134 1.50373 26.371 1.6088C26.6286 1.71387 26.8347 1.92402 26.9378 2.1867L27.9271 4.61386C28.0404 4.88705 28.329 5.04466 28.6175 4.99212C30.5652 4.59285 32.5335 4.59285 34.4811 4.99212C34.7697 5.05517 35.0582 4.89756 35.1716 4.61386L36.1609 2.1867C36.3876 1.64032 36.9956 1.37764 37.5315 1.6088L40.1181 2.70155C40.6539 2.93271 40.9116 3.55263 40.6848 4.09901L39.7162 6.50516C39.6028 6.77835 39.6955 7.10407 39.9429 7.27219C41.5917 8.39646 42.9932 9.82544 44.0855 11.4961C44.2504 11.7483 44.5596 11.8428 44.8378 11.7272L47.2183 10.7186C47.4759 10.6135 47.7645 10.6135 48.0221 10.7186C48.2797 10.8236 48.4858 11.0338 48.5889 11.2965L49.6606 13.9443C49.7637 14.207 49.7637 14.5012 49.6606 14.7638C49.5576 15.0265 49.3515 15.2367 49.0938 15.3417L46.7134 16.3504C46.4454 16.466 46.2908 16.7602 46.3424 17.0544C46.734 19.0403 46.7237 21.0471 46.3424 23.033C46.2805 23.3272 46.4351 23.6214 46.7134 23.737L49.0938 24.7457C49.6297 24.9768 49.8873 25.5968 49.6606 26.1431L48.5889 28.7805C48.3622 29.3268 47.7542 29.5895 47.2183 29.3584L44.8378 28.3497C44.5699 28.2341 44.2504 28.3286 44.0855 28.5808C42.9829 30.262 41.5814 31.691 39.9429 32.8047C39.6955 32.9728 39.6028 33.288 39.7162 33.5717L40.7055 35.9989C40.8085 36.2616 40.8085 36.5558 40.7055 36.8185C40.6024 37.0812 40.3963 37.2913 40.1387 37.3964L37.5418 38.4891C37.2841 38.5942 36.9956 38.5942 36.738 38.4891C36.4803 38.384 36.2742 38.1739 36.1712 37.9112L35.1819 35.4841C35.0479 35.1583 34.6872 35.0112 34.3781 35.1478C34.0586 35.2844 33.9144 35.6522 34.0483 35.9674L35.0376 38.3946C35.2746 38.9725 35.7075 39.4138 36.2742 39.6554C36.5525 39.771 36.8513 39.834 37.1502 39.834C37.449 39.834 37.7479 39.771 38.0261 39.6554L40.623 38.5627C41.1898 38.321 41.6226 37.8797 41.8596 37.3018C42.0966 36.7239 42.0966 36.0935 41.8596 35.5156L41.0661 33.5612C42.5295 32.5 43.797 31.2076 44.8481 29.7051L46.7649 30.5141C47.3317 30.7558 47.95 30.7558 48.5168 30.5141C49.0835 30.2725 49.5164 29.8312 49.7534 29.2533L50.8251 26.616C51.3095 25.4287 50.753 24.0627 49.5885 23.5689Z" fill="black"/>
                            <path d="M14.9013 30.6506C11.7067 30.6506 9.1098 33.309 9.1098 36.5662C9.1098 39.8234 11.7067 42.4607 14.9013 42.4607C18.0959 42.4607 20.6928 39.8129 20.6928 36.5557C20.6928 33.2985 18.0959 30.6506 14.9013 30.6506ZM14.9013 41.2104C12.3868 41.2104 10.3464 39.13 10.3464 36.5662C10.3464 34.0024 12.3868 31.922 14.9013 31.922C17.4158 31.922 19.4562 34.0024 19.4562 36.5662C19.4562 39.13 17.4158 41.2104 14.9013 41.2104Z" fill="black"/>
                            <path d="M27.9682 33.6347H26.5976C26.3091 32.4054 25.835 31.2496 25.1858 30.1674L26.1545 29.1797C26.5049 28.8224 26.6903 28.3601 26.6903 27.8558C26.6903 27.3619 26.5049 26.8891 26.1545 26.5319L24.7118 25.0609C24.3614 24.7036 23.908 24.5145 23.4133 24.5145C22.9187 24.5145 22.4652 24.7036 22.1149 25.0609L21.1462 26.0485C20.0847 25.3866 18.9512 24.9138 17.7455 24.6091V23.2116C17.7455 22.1819 16.9211 21.3413 15.9112 21.3413H13.8707C12.8608 21.3413 12.0364 22.1819 12.0364 23.2116V24.6091C10.8307 24.9033 9.69715 25.3866 8.63572 26.0485L7.66703 25.0609C7.31666 24.7036 6.86323 24.5145 6.36858 24.5145C5.88424 24.5145 5.42051 24.7036 5.07014 25.0609L3.62741 26.5319C3.27704 26.8891 3.09155 27.3514 3.09155 27.8558C3.09155 28.3496 3.27704 28.8224 3.62741 29.1797L4.5961 30.1674C3.94687 31.2496 3.48314 32.4054 3.18429 33.6347H1.83432C0.824412 33.6347 0 34.4753 0 35.505V37.5855C0.0103052 38.6362 0.824412 39.4663 1.83432 39.4663H3.2049C3.49345 40.6956 3.96748 41.8514 4.61671 42.9336L3.64802 43.9213C3.29765 44.2786 3.11216 44.7409 3.11216 45.2452C3.11216 45.7391 3.29765 46.2119 3.64802 46.5691L5.09075 48.0401C5.44112 48.3974 5.89455 48.5865 6.3892 48.5865C6.87354 48.5865 7.33727 48.3974 7.68764 48.0401L8.65633 47.0525C9.71776 47.7144 10.8513 48.1872 12.057 48.4919V49.8894C12.057 50.9191 12.8814 51.7597 13.8913 51.7597H15.9318C16.9417 51.7597 17.7661 50.9191 17.7661 49.8894V48.4814C18.9718 48.1872 20.1054 47.7039 21.1668 47.042L22.1355 48.0296C22.4858 48.3869 22.9393 48.576 23.4339 48.576C23.9286 48.576 24.382 48.3869 24.7324 48.0296L26.1751 46.5586C26.5255 46.2014 26.711 45.7391 26.711 45.2347C26.711 44.7409 26.5255 44.268 26.1751 43.9108L25.2064 42.9231C25.8556 41.8409 26.3194 40.6851 26.6182 39.4557H27.9682C28.9781 39.4557 29.8025 38.6152 29.8025 37.5855V35.505C29.8025 34.4753 28.9781 33.6347 27.9682 33.6347ZM28.5659 37.6065C28.5659 37.9427 28.298 38.2159 27.9682 38.2159H26.0926C25.7938 38.2159 25.5465 38.426 25.4846 38.7202C25.2064 40.1387 24.6705 41.4731 23.877 42.671C23.7122 42.9231 23.7431 43.2594 23.9492 43.4695L25.2785 44.8249C25.3919 44.9405 25.4537 45.0876 25.4537 45.2557C25.4537 45.4133 25.3919 45.5709 25.2785 45.6865L23.8358 47.1575C23.7225 47.2731 23.5782 47.3362 23.4133 47.3362C23.2484 47.3362 23.1042 47.2731 22.9908 47.1575L21.6614 45.8021C21.4553 45.592 21.1256 45.5604 20.8782 45.7286C19.6931 46.5376 18.3947 47.084 17.0035 47.3677C16.715 47.4307 16.5089 47.6829 16.5089 47.9876V49.8999C16.5089 50.2361 16.2409 50.5093 15.9112 50.5093H13.8707C13.541 50.5093 13.273 50.2361 13.273 49.8999V47.9876C13.273 47.6829 13.0669 47.4307 12.7784 47.3677C11.3872 47.084 10.0784 46.5376 8.90365 45.7286C8.8006 45.655 8.67694 45.6235 8.56358 45.6235C8.40901 45.6235 8.24412 45.6865 8.13077 45.8126L6.8014 47.168C6.68804 47.2836 6.54377 47.3467 6.37889 47.3467C6.22431 47.3467 6.06974 47.2836 5.95638 47.168L4.51366 45.697C4.4003 45.5815 4.33847 45.4344 4.33847 45.2662C4.33847 45.1086 4.4003 44.951 4.51366 44.8354L5.84302 43.48C6.04913 43.2699 6.08004 42.9336 5.91516 42.6815C5.12166 41.4731 4.58579 40.1492 4.30755 38.7307C4.24572 38.4365 3.9984 38.2264 3.69955 38.2264H1.83432C1.50455 38.2264 1.23662 37.9532 1.23662 37.617V35.526H1.24692C1.24692 35.1898 1.51486 34.9166 1.84462 34.9166H3.72016C4.01901 34.9166 4.26633 34.7065 4.32816 34.4123C4.6064 32.9938 5.14227 31.6594 5.93577 30.4616C6.10065 30.2094 6.06974 29.8732 5.86363 29.663L4.52396 28.3076C4.41061 28.192 4.34877 28.0449 4.34877 27.8768C4.34877 27.7192 4.41061 27.5616 4.52396 27.446L5.96668 25.975C6.08004 25.8594 6.22431 25.7964 6.3892 25.7964C6.54377 25.7964 6.69835 25.8594 6.81171 25.975L8.14107 27.3304C8.34717 27.5406 8.67694 27.5721 8.92426 27.404C10.1094 26.5949 11.4078 26.0485 12.799 25.7648C13.0875 25.7018 13.2936 25.4496 13.2936 25.1449V23.2326C13.2936 22.8964 13.5616 22.6232 13.8913 22.6232H15.9318C16.2615 22.6232 16.5295 22.8964 16.5295 23.2326V25.1554C16.5295 25.4601 16.7356 25.7123 17.0241 25.7754C18.4153 26.059 19.7241 26.6054 20.8989 27.4145C21.1462 27.5826 21.4759 27.5511 21.682 27.3409L23.0114 25.9855C23.1248 25.8699 23.269 25.8069 23.4339 25.8069C23.5988 25.8069 23.7431 25.8699 23.8564 25.9855L25.2992 27.4565C25.4125 27.5721 25.4743 27.7192 25.4743 27.8873C25.4743 28.0449 25.4125 28.2025 25.2992 28.3181L23.9492 29.663C23.7431 29.8732 23.7122 30.2094 23.877 30.4616C24.6705 31.6699 25.2064 32.9938 25.4846 34.4123C25.5465 34.7065 25.7938 34.9166 26.0926 34.9166H27.9682C28.298 34.9166 28.5659 35.1898 28.5659 35.526V37.6065Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="51" height="52" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg> <div class="sidebaricon " id="sidebartext4">Supporters</div>
                    </a>
                </li>
                <li>
                    <a id="sidebara5" href="#">
                        <svg width="30" height="" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M9.61735 3.5621C4.58164 6.01852 2.2296 7.14053 2.02552 7.17865C1.62246 7.26035 1.32144 7.43464 1.02042 7.756C0.678579 8.12637 0.489804 8.44227 0.30613 8.94336C-0.0204004 9.8366 7.81198e-06 8.85621 7.81198e-06 25C7.81198e-06 41.1438 -0.0204004 40.1634 0.30613 41.0566C0.663273 42.037 1.27042 42.6634 2.03062 42.8214C2.2194 42.8595 4.85715 44.1176 9.64286 46.4434L16.9643 50L17.2092 49.9455C17.9235 49.7821 18.5306 49.1449 18.8776 48.1917C19.2041 47.2876 19.1837 49.0033 19.1837 25C19.1837 1.00218 19.2041 2.71242 18.8776 1.80828C18.602 1.04576 18.148 0.468414 17.6276 0.212423C17.0102 -0.0925882 17.7551 -0.403046 9.61735 3.5621ZM14.148 21.0131C15.7602 21.6394 16.4541 23.6057 15.648 25.2451C15.5561 25.4248 15.3469 25.719 15.1786 25.8987C14.0918 27.0588 12.352 27.0588 11.2551 25.8987C10.7092 25.3268 10.4439 24.6242 10.449 23.78C10.4592 22.4346 11.2551 21.3235 12.5 20.9368C12.8571 20.8224 13.7806 20.866 14.148 21.0131Z" fill="black"/>
                        <path d="M23.2654 6.34534V8.33336H28.3164H33.3674V11.9826V15.6318H35.0052H36.6378L36.6225 11.6939C36.6021 7.82683 36.6021 7.75602 36.4899 7.33118C36.1735 6.12203 35.4797 5.16887 34.5664 4.68957C33.9286 4.35188 34.046 4.35733 28.4082 4.35733H23.2654V6.34534Z" fill="black"/>
                        <path d="M39.0308 15.2668V18.0283H32.7297H26.4287L26.4389 24.2483L26.4542 30.4738L32.7399 30.4901L39.0308 30.501L39.041 33.0119L39.0563 35.5228L44.4644 29.8474C47.4389 26.7265 49.9032 24.1394 49.9389 24.1067C49.99 24.0522 49.1277 23.1154 45.5257 19.33C43.0614 16.7429 40.592 14.1503 40.041 13.5675L39.0308 12.5054V15.2668Z" fill="black"/>
                        <path d="M33.4031 32.2821C33.3827 32.2985 33.3674 34.4227 33.3674 36.9935V41.6667H28.3164H23.2654V43.6547V45.6427H28.4082C32.6633 45.6427 33.6072 45.6264 33.8878 45.561C35.1072 45.2887 36.1225 44.1503 36.495 42.6471L36.6072 42.1841V37.2277V32.2712L35.0205 32.2549C34.148 32.2495 33.4236 32.2604 33.4031 32.2821Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="50" height="50" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> <div class="sidebaricon " id="sidebartext5">Logout</div>
                    </a>
                </li>
            </ul>



        </nav>

        <div class="main">
			<div class="card card-post">
                <div class="create-post">
                   <div class="create-new">
				   Buat Postingan
				   </div>
				
				   <textarea height="100px" rows="5" placeholder="Deskripsi karyamu"></textarea>

                </div>

                

                <div class="action-create">
                  <div class="action-create-kiri">
                      <div class="custom-gambar">
                        <label for="fileupload"></label>
                        <input type="file" id="fileupload">
                    </div>
                    <div class="upload-images">
                        <img src="upload.png" id="upload-img">
                    </div>
				  </div>
				  
				  <div class="action-create-kanan">
						<div class="create-button">
						POST
						</div>
						<div class="create-private">
						</div>
				  </div>
                </div>
            </div>
			
            <div class="card card-post">
                <div class="mypost">
					My Post
				</div>
                <hr class="divider">
				<div class="mypost-post">
						<div class="mypost-content">
							<div class="mypost-title">
							HY 
							</div>
							<div class="mypost-date">
							20 maret 2021
							</div>
							<div class="post-text">
								<p>Post Description</p>
							</div>
							<div class="media">
								<img width="70%" src={{ asset('style/assets/image-post.PNG') }} alt="">
							</div>
						</div>
						
                </div>
              
            </div>

            

        </div>

    </div>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

<script>
    $(function() {
        $("#fileupload").change(function(event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#upload-img").attr("src", x);
            console.log(event);
        });
    })
</script>

</html>