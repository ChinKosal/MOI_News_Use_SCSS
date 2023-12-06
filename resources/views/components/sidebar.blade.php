<div class="sidebar_container" id="showdialog">
    <div class="sidebar relative flex w-full h-full">
        <div class="lefeside fixd top-0 left-0 block w-[20%] h-full">

        </div>
        <div class="rightside  w-[80%] h-full bg-white​  overflow-scroll">
            <div class="header_sidebar relative w-full h-[11.5%] bg-blue-900">
                <button class="exit-toggle absolute top-3 left-3 bg-transparent border-transparent" id="exittoogle">
                    <i class="fa-solid fa-xmark text-4xl text-white"></i>
                </button>
                <div class="logo_box w-fit h-full m-auto p-3">
                    <img class="w-full h-full object-cover" src="./assets/image/logo/website-logo.png" alt="">
                </div>
            </div>
            <div class="menu_content relative z-[999999] w-full h-[130vh]">
                <div class="search  relative top-0 w-full h-[50px]">
                    <form action="#">
                        <input
                            class="absolute w-[90%] h-full outline-none border-transparent bg-inherit p-3 font-Kantumruy font-medium text-base"
                            type="text" placeholder="ស្វែងរក...">
                    </form>
                    <button class="absolute right-0 top-0 border-none  w-[10%] h-full bg-inherit">
                        <i class="fa-solid fa-magnifying-glass text-lg text-blue-800"></i>
                    </button>
                </div>
                <div class="menu​​ w-full h-full fixd top-0 bg-gray">
                    <ul class="grid grid-flow-row pl-3 pr-3">
                        <a class="{{ request()->routeIs('index') ? '' : '' }}" href="{{ route('index') }}">
                            <li class="{{ request()->routeIs('index') ? 'active_sidebar' : '' }}">
                                ទំព័រដើម
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page2') ? '' : '' }}" href="{{ route('page2') }}">
                            <li class="{{ request()->routeIs('page2') ? 'active_sidebar' : '' }}">
                                ព័ត៌មានថ្មីបំផុត
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page3') ? '' : '' }}" href="{{ route('page3') }}">
                            <li class="{{ request()->routeIs('page3') ? 'active_sidebar' : '' }}">
                                សារព័ត៌មានប្រចាំថ្ងៃ
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page4') ? '' : '' }}" href="{{ route('page4') }}">
                            <li class="{{ request()->routeIs('page4') ? 'active_sidebar' : '' }}">
                                សកម្មភាពថ្នាក់ដឹកនាំ
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page5') ? '' : '' }}" href="{{ route('page5') }}">
                            <li class="{{ request()->routeIs('page5') ? 'active_sidebar' : '' }}">
                                សន្តិសុខសង្គម
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page6') ? '' : '' }}" href="{{ route('page6') }}">
                            <li class="{{ request()->routeIs('page6') ? 'active_sidebar' : '' }}">
                                វគ្គបណ្តុះបណ្តាល
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page7') ? '' : '' }}" href="{{ route('page7') }}">
                            <li class="{{ request()->routeIs('page7') ? 'active_sidebar' : '' }}">
                                នគរបាលនិងសហគមន៍
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page8') ? '' : '' }}" href="{{ route('page8') }}">
                            <li class="{{ request()->routeIs('page8') ? 'active_sidebar' : '' }}">
                                ប្រយុទ្ធប្រឆាំងគ្រឿងញៀន
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page9') ? '' : '' }}" href="{{ route('page9') }}">
                            <li class="{{ request()->routeIs('page9') ? 'active_sidebar' : '' }}">
                                សណ្តាប់ធ្នាប់​​ និងចរាចរណ៍
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page10') ? '' : '' }}" href="{{ route('page10') }}">
                            <li class="{{ request()->routeIs('page10') ? 'active_sidebar' : '' }}">
                                វេទិការ និងនគរបាល
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page11') ? '' : '' }}" href="{{ route('page11') }}">
                            <li class="{{ request()->routeIs('page11') ? 'active_sidebar' : '' }}">
                                ទស្សនាវដ្តី
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page12') ? '' : '' }}" href="{{ route('page12') }}">
                            <li class="{{ request()->routeIs('page12') ? 'active_sidebar' : '' }}">
                                វីដេអូ
                            </li>
                        </a>
                        <a class="{{ request()->routeIs('page13') ? '' : '' }}" href="{{ route('page13') }}">
                            <li class="{{ request()->routeIs('page13') ? 'active_sidebar' : '' }}">
                                វិទ្យុ
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
