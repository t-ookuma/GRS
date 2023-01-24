@if(is_null($news))
<div class="w-full max-w-2xl mx-auto rounded-sm border border-white border-dashed">
    <div class="p-3">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead class="text-xs font-semibold text-gray-900 bg-white-op">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center"></div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap w-1/4">
                            <div class="text-center">お知らせはありません。</div>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="text-xs font-semibold text-gray-900 bg-white-op">
                    <tr>
                        <th colspan="4" class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center"></div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@elseif(!is_null($news))
<div class="w-full max-w-2xl mx-auto rounded-sm border border-white border-dashed">
    <div class="p-3">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead class="text-xs font-semibold text-gray-900 bg-white-op">
                    <tr>
                        <th colspan="4" class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center"></div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        <td class="p-2 whitespace-nowrap w-1/4">
                            <div class="text-center">sampletext</div>
                        </td>
                        <td class="p-2 whitespace-nowrap w-3/4">
                            <div class="text-center">sampletext</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap w-1/4">
                            <div class="text-center">sampletext</div>
                        </td>
                        <td class="p-2 whitespace-nowrap w-3/4">
                            <div class="text-center">sampletext</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap w-1/4">
                            <div class="text-center">sampletext</div>
                        </td>
                        <td class="p-2 whitespace-nowrap w-3/4">
                            <div class="text-center">sampletext</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 whitespace-nowrap w-1/4">
                            <div class="text-center">sampletext</div>
                        </td>
                        <td class="p-2 whitespace-nowrap w-3/4">
                            <div class="text-center">sampletext</div>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="text-xs font-semibold text-gray-900 bg-white-op">
                    <tr>
                        <th colspan="4" class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center"></div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endif