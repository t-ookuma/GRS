<div class="flex justify-center items-start my-4">
    <div class="w-full sm:w-10/12 md:w-1/2 my-1">
        <ul class="flex flex-col">
            <li class="bg-gray-800 my-2 rounded-lg" x-data="accordion(1)">
                <h2 @click="handleClick()" onclick="changeText()" class="flex flex-row justify-between items-center p-3 cursor-pointer">
                    <span class="ml-2 mx-1 btn">検索する</span>
                    <svg :class="handleRotate()" class="mr-2 mx-1 fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                </h2>
                <!-- 検索項目 -->
                <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                    <div class="border-b border-white border-dashed mx-4"></div>
                    <form action="/reserves" method="get">
                        <div class="flex px-8 pt-8 items-center">
                            <label for="search" class="sr-only">...</label>
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Search" required>
                            </div>
                            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex px-8 pt-4 items-center">
                            <label for="date" class="whitespace-nowrap mx-4">&emsp;日付</label>
                            <div class="relative w-full mr-4">
                                <input type="date" name="started_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            ～
                            <div class="relative w-full ml-4">
                                <input type="date" name="finished_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                        </div>
                        <div class="flex px-8 pt-4 items-center">
                            <label for="date" class="whitespace-nowrap mx-4">時間帯</label>
                            <div class="relative w-full mr-4">
                                <input type="time" name="started_time" step="900" list="data-list" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            ～
                            <div class="relative w-full ml-4">
                                <input type="time" name="finished_time" step="900" list="data-list" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                            </div>
                            <datalist id="data-list">
                                <option value="06:00"></option>
                                <option value="06:15"></option>
                                <option value="06:30"></option>
                            </datalist>
                        </div>
                        <div class="flex px-8 pt-4 items-center">
                            <label for="category" class="whitespace-nowrap mr-4">&emsp;&emsp;種目</label>
                            <div class="relative w-full">
                                <select name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                            <label for="archive" class="whitespace-nowrap mx-4">&emsp;&emsp;履歴</label>
                            <div class="relative w-full">
                                <select name="archive" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex px-8 pt-4 pb-8 items-center">
                            <label for="prefectures" class="whitespace-nowrap mr-4">都道府県</label>
                            <div class="relative w-full">
                                <select name="prefectures" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                            <label for="municipalities" class="whitespace-nowrap mx-4">市区町村</label>
                            <div class="relative w-full">
                                <select name="municipalities" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 ">
                                    <option value="" selected>選択してください</option>
                                    <option value="">sample1</option>
                                    <option value="">sample2</option>
                                    <option value="">sample3</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>

<script>
    /**
     * テキスト変更
     */
    function changeText() {
        let btn = document.getElementsByClassName("btn")[0];

        if (btn.textContent == "検索する") {
            btn.textContent = "検索条件";
        } else {
            btn.textContent = "検索する";
        }
    }

    /**
     * accordion制御
     */
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>