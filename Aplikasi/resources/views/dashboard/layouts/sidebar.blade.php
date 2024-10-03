<!--Sidebar-->
<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col">
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/home"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fa fa-home float-left mx-2"></i>
                Home
            </a>
        </li>

        @can('admin')
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/adminenrollment"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
            <i class="fa fa-user float-left mx-2"></i>
                Enrollment Management
            </a>
        </li>

        
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/admingroup"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
            <i class="fa fa-users float-left mx-2"></i>
            Group Management
            </a>
        </li>
    
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/admintopic"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
            <i class="fa fa-file float-left mx-2"></i>
                Topic Management
            </a>
        </li>

        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/adminmeeting"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fas fa-video float-left mx-2"></i>
                Meeting Management
            </a>
        </li>
        @endcan
        
        @cannot('admin')
            
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/enrollment"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fa fa-user float-left mx-2"></i>
                Enrollment
            </a>
        </li>

        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/group"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fa fa-users float-left mx-2"></i>
                Group
            </a>
        </li>

        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/topic"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
            <i class="fa fa-file float-left mx-2"></i>
                Topic
            </a>
        </li>

        
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white ">
            <a href="/meeting"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fas fa-video float-left mx-2"></i>
                Meeting
            </a>
        </li>

        @endcannot
        
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="#" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                    <div class="float-left">
                        <i class="far fa-calendar-alt mx-2"></i>
                        <span>Schedule</span>
                    </div>
                    <div class="float-right">
                        <svg fill="currentColor" 
                            viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" 
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" 
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                            clip-rule="evenodd">
                        </path>
                        </svg>
                    </div>
            </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="/lecture"
                        class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                            <i class="fas fa-comments float-left mx-2"></i>
                            Lecture
        
                        </a>
                    </li>
            
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="/seminar"
                        class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                            <i class="fas fa-rss float-left mx-2"></i>
                            Seminar
        
                        </a>
                    </li>
                </div>
                </div>
            </a>
        </div>

        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/evaluation"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fas fa-tasks float-left mx-2"></i>
                Evaluation
            </a>
        </li>

        @can('admin')
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/adminfinalization"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fas fa-graduation-cap float-left mx-1"></i>
                Finalization Management
            </a>
        </li>
        @endcan

        @cannot('admin')
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/finalization"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fas fa-graduation-cap float-left mx-1"></i>
                Finalization
            </a>
        </li>
        @endcannot

        @can('admin')
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="/adminprofile"
            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline ">
                <i class="fa fa-cogs float-left mx-1"></i>
                Profile Management
            </a>
        </li>
        @endcan
    </ul>
</aside>
<!--/Sidebar-->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>