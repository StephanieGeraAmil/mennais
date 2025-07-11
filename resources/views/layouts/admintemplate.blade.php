

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    
    <script src="/assetsadmin/assets/jquery/jquery.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="/assetsadmin/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    
    <link href="/datatables/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/assetsadmin/assets/css/responsive.dataTables.min.css" rel="stylesheet">
  
    @yield('custom_style')

</head>


<body class="bg-gray-200 font-sans leading-normal tracking-normal">
	<div class="flex flex-col justify-between">
    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-600 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                    {{env('EVENT_NAME')}}
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <span class="hidden md:inline-block">Hola, {{ auth()->user()->name }}</span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                {{-- <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Notifications</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400"> 
                                </li>--}}
                                <li><a class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline" href="{{ route('logout') }}"
									onclick="event.preventDefault();
												  document.getElementById('logout-form').submit();">
									 Salir
								 </a>
	
								 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									 @csrf
								 </form></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="/admin" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-400 border-b-2 hover:border-gray-400 {{(Route::current()->getName() == "index")?"text-gray-400 border-gray-400 ":"text-gray-600 border-gray-600 "}}">
                            <i class="fas fa-user mr-3"></i><span class="pb-1 md:pb-0 text-sm">Inscripciones</span>
                        </a>
                    </li>                    
                    {{-- <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-green-500 hover:text-green-500">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Payments</span>
						</a>
                    </li> --}}
					{{-- <li class="mr-6 my-2 md:my-0">
                        <a href="/admin/group_insc" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-400 border-b-2 hover:border-gray-400 {{(Route::current()->getName() == "admingrupal")?"text-gray-400 border-gray-400 ":"text-gray-600 border-gray-600 "}}">
                            <i class="fas fa-users mr-3"></i><span class="pb-1 md:pb-0 text-sm">Insc. Grupales</span>
						</a>
                    </li> --}}
                    {{-- <li class="mr-6 my-2 md:my-0">
                        <a href="/admin/payment" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-400 border-b-2 hover:border-gray-400 {{(Route::current()->getName() == "adminpayment")?"text-gray-400 border-gray-400 ":"text-gray-600 border-gray-600 "}}">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Pagos realizados</span>
						</a>
                    </li> --}}
                </ul>

                {{-- <div class="relative pull-right pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </div> --}}

            </div>

        </div>
    </nav>

	@yield('container_body')
    
	<footer class="bg-white border-t border-gray-400 border-b-2 shadow opacity-80">
        <div class="container max-w-md mx-auto flex py-8">

			<div class="w-full mx-auto flex flex-wrap justify-center">
				<div class="px-8">
						<h3 class="font-bold font-bold text-gray-400">Designed by ISF</h3>			
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
</div>


{{-- <script src="/assetsadmin/assets/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  
<!-- Core plugin JavaScript-->
{{-- <script src="/assetsadmin/assets/jquery-easing/jquery.easing.min.js"></script> --}}

<!-- Custom scripts for all pages-->
{{-- <script src="/assetsadmin/assets/js/sb-admin-2.min.js"></script> --}}

<!-- Page level plugins -->
<script src="/assetsadmin/assets/chart.js/Chart.min.js"></script>

<script src="/assetsadmin/assets/js/jquery.dataTables.min.js"></script>
<script src="/assetsadmin/assets/js/dataTables.responsive.min.js"></script>


<script src="/assetsadmin/assets/datatable_export/dataTables.buttons.min.js"></script>


<script src="/assetsadmin/assets/datatable_export/jszip.min.js"></script>  
<script src="/assetsadmin/assets/datatable_export/pdfmake.min.js"></script>  
<script src="/assetsadmin/assets/datatable_export/vfs_fonts.js"></script>  
<script src="/assetsadmin/assets/datatable_export/buttons.html5.min.js"></script>  
<script src="/assetsadmin/assets/datatable_export/buttons.print.min.js"></script>  



<script>
	
	
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

	var userMenuDiv = document.getElementById("userMenu");
	var userMenu = document.getElementById("userButton");
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;

	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);

	  //User Menu
	  if (!checkParent(target, userMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, userMenu)) {
		  // click on the link
		  if (userMenuDiv.classList.contains("invisible")) {
			userMenuDiv.classList.remove("invisible");
		  } else {userMenuDiv.classList.add("invisible");}
		} else {
		  // click both outside link and outside menu, hide menu
		  userMenuDiv.classList.add("invisible");
		}
	  }
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}

	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}


</script>

</body>
</html>
