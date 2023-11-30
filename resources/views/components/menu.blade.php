<nav class="navbar  w-[100%] relative">
    <div class="navbar-container_navbar">
        <div class="navbar_item relative">
                <a class="{{ request()->routeIs('index') ? 'active_item' : '' }}" href="{{ route('index') }}">
                    <li class="{{ request()->routeIs('index') ? 'active' : '' }}">ទំព័រដើម</li>
                </a>
                <a  class="{{ request()->routeIs('latest_news') ? 'active_item' : '' }}" href="{{ route('latest_news') }}">
                    <li  class="{{ request()->routeIs('latest_news') ? 'active' : '' }}">ព័ត៌មានថ្មីបំផុត</li>
                </a>
                <a href="#" class="hover:bg-white hover:cursor-pointer text-white">
                    <li>សារព័ត៌មានប្រចាំថ្ងៃ</li>
                </a>
                <a href="#" class="hover:bg-white hover:cursor-pointer text-white">
                    <li>សកម្មភាពថ្នាក់ដឹកនាំ</li>
                </a>
                <a href="#" class="hover:bg-white hover:cursor-pointer text-white">
                    <li>សន្តិសង្គម</li>
                </a>
                <a href="#" class="hover:bg-white hover:cursor-pointer text-white">
                    <li>វគ្គបណ្តុះបណ្តាល</li>
                </a>
                <div class="flex items-center  relative group hover:bg-white hover:cursor-pointer last_item">
                    <a class="menu-hover  last_text_item  text-white" onClick="">
                        ផ្សេងៗ
                    </a> 
                    <span class="absolute top-4.5 right-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1024 1024"><path fill="currentColor" d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496z"/></svg>
                    </span>
                    <div class="invisible absolute group-hover:visible  box_item_drop bg-white">
        
                    <a class=" block item_drop  ">
                        នគរបាល​ និងសហគមន៍
                    </a>
        
                    <a class="block item_drop">
                        ប្រយុទ្ធប្រឆាំងនិងគ្រឿងញៀន
                    </a>
        
                    <a class="  block item_drop">
                        សណ្តាប់ធ្នាប់និងចរាចរណ៍
                    </a>
        
                    <a class=" block item_drop ">
                        វេទិការពលរដ្ឋ និងនគរបាល
                    </a>
        
                    <a class=" block item_drop ">
                        ទស្សនាវដ្តី
                    </a>
        
                    <a class="block item_drop">
                        វីដេអូ
                    </a>
        
                    <a class=" block item_drop ">
                        វិទ្យុ
                    </a>
        
                </div>
            </div>
        </div>
    </div>
</nav>