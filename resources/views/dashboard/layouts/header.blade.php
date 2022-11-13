<!--Header Section Starts Here-->
<header class="bg-nav">
    <div class="flex justify-between">
        <div class="p-1 mx-3 inline-flex items-center">
            <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
            <h1 class="text-white p-2">MANTA</h1>
        </div>
        <div class="p-1 flex flex-row items-center">
            <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="{{ asset('storage/' . auth()->user()->image) }}" alt="">
            <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Hello, {{ auth()->user()->name }}</a>
            <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                <ul class="list-reset">
                  <li><a href="/profile" class="no-underline px-4 py-2 block text-black hover:bg-grey-light text-center">My Profile</a></li>
                  <li><hr class="border-t mx-2 border-grey-ligght"></li>
                  <li>
                      <form action="/logout" method="POST">
                        @csrf
                          <button class="no-underline px-8 py-2 block text-black hover:bg-grey-light" type="submit">Logout
                          </button> 
                      </form>
                </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--/Header-->