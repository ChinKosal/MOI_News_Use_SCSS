<nav class="navbar  w-[100%] relative">
    <div class="navbar-container_navbar">
        <div class="navbar_item relative">
            <a class="{{ request()->routeIs('index') ? 'active_item' : '' }}" href="{{ route('index') }}">
                <li class="{{ request()->routeIs('index') ? 'active' : '' }}">ទំព័រដើម</li>
            </a>
            <a class="{{ request()->routeIs('page2') ? 'active_item' : '' }}" href="{{ route('page2') }}">
                <li class="{{ request()->routeIs('page2') ? 'active' : '' }}">ព័ត៌មានថ្មីបំផុត</li>
            </a>
            <a class="{{ request()->routeIs('page3') ? 'active_item' : '' }}" href="{{ route('page3') }}">
                <li class="{{ request()->routeIs('page3') ? 'active' : '' }}">សារព័ត៌មានប្រចាំថ្ងៃ</li>
            </a>
            <a class="{{ request()->routeIs('page4') ? 'active_item' : '' }}" href="{{ route('page4') }}">
                <li class="{{ request()->routeIs('page4') ? 'active' : '' }}">សកម្មភាពថ្នាក់ដឹកនាំ</li>
            </a>
            <a class="{{ request()->routeIs('page5') ? 'active_item' : '' }}" href="{{ route('page5') }}">
                <li class="{{ request()->routeIs('page5') ? 'active' : '' }}">សន្តិសុខសង្គម</li>
            </a>
            <a class="{{ request()->routeIs('page6') ? 'active_item' : '' }}" href="{{ route('page6') }}">
                <li class="{{ request()->routeIs('page6') ? 'active' : '' }}">វគ្គបណ្តុះបណ្តាល</li>
            </a>
            <div class="flex items-center  relative hover:bg-white hover:cursor-pointer last_item">
                <a class="last_text_item  text-white p-3">
                    ផ្សេងៗ
                    <span class="absolute top-4.5 right-0 hover:bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 1024 1024">
                            <path fill="currentColor"
                                d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8l316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496z" />
                        </svg>
                    </span>
                </a>
                <div class="box_item_drop bg-white">
                    <div class="box_item_drop-item_list">
                        <a class="{{ request()->routeIs('page7') ? 'active_drop' : '' }}" href="{{ route('page7') }}"
                            id="item_drop">
                            នគរបាល​ និងសហគមន៍
                        </a>

                        <a class="{{ request()->routeIs('page8') ? 'active_drop' : '' }}" href="{{ route('page8') }}"
                            id="item_drop">
                            ប្រយុទ្ធប្រឆាំងនិងគ្រឿងញៀន
                        </a>

                        <a class="{{ request()->routeIs('page9') ? 'active_drop' : '' }}" href="{{ route('page9') }}"
                            id="item_drop">
                            សណ្តាប់ធ្នាប់និងចរាចរណ៍
                        </a>

                        <a class="{{ request()->routeIs('page10') ? 'active_drop' : '' }}"
                            href="{{ route('page10') }}" id="item_drop">
                            វេទិការពលរដ្ឋ និងនគរបាល
                        </a>

                        <a class="{{ request()->routeIs('page11') ? 'active_drop' : '' }}"
                            href="{{ route('page11') }}" id="item_drop">
                            ទស្សនាវដ្តី
                        </a>

                        <a class="{{ request()->routeIs('page12') ? 'active_drop' : '' }}"
                            href="{{ route('page12') }}" id="item_drop">
                            វីដេអូ
                        </a>

                        <a class="{{ request()->routeIs('page13') ? 'active_drop' : '' }}"
                            href="{{ route('page13') }}" id="item_drop">
                            វិទ្យុ
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
