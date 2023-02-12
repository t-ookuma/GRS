<div class="flex justify-center items-start my-4">
    <div class="w-full sm:w-10/12 my-1">
        <ul class="flex flex-col">
            <li class="bg-gray-800 h-screen my-2 p-6 rounded-lg">
                <div class="flex h-2/3">
                    <div class="w-2/3">
                        <img src="{{ asset('storage/2017-10-16.jpg') }}" alt="">
                        <ul class="mt-5">
                        </ul>
                    </div>
                    <div class="w-1/3">
                        <ul class="ml-5">
                            <li><iframe id='map' class="w-full" height="385vh" src='https://www.google.com/maps/embed/v1/place?key={{ config("services.google-map.apikey") }}&q=北海道札幌丘珠高等学校' frameborder='0'></iframe></li>
                        </ul>
                    </div>
                </div>
                <div class="flex h-1/3 text-sm">
                    <div class="w-1/2">
                        <ul class="py-5">
                            <li class="my-5">&emsp;学校名：北海道札幌丘珠高等学校</li>
                            <li class="my-5">&emsp;&emsp;住所：〒007-0881&nbsp;北海道札幌市東区北丘珠1条2-589-1</li>
                            <li class="my-5">&emsp;&emsp;TEL：011-782-2911</li>
                            <li class="my-5">&emsp;&emsp;FAX：011-782-8370</li>
                        </ul>
                    </div>
                    <div class="w-1/2">
                        <ul class="py-5">
                            <li class="my-5">
                                対応種目：バレーボール,&nbsp;バスケットボール,&nbsp;バドミントン,&nbsp;<br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;フットサル,&nbsp;ハンドボール,&nbsp;
                            </li>
                            <li class="my-5">&emsp;リンク：<a class="hover:border-b hover:border-white" href="http://www.sapporookadama.hokkaido-c.ed.jp/">http://www.sapporookadama.hokkaido-c.ed.jp/</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>