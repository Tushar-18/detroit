@extends('../layouts/admin-side-navbar')

<head>
    @vite('resources/css/app.css')
</head>
{{-- @include('admin.admin-side-navbar'); --}}
@section('content')
    <div class="overflow-x-auto overflow-y-hidden rounded-lg border border-gray-200 w-full shadow-md m-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Images</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Price</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product quantity</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Description</th>

                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Delete</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Edit</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($data as $d)
                    <tr class="hover:bg-zinc-200">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                            <div class="relative h-10 w-10">
                                <img class="h-full w-full rounded-full object-cover object-center"
                                    src="../product_pic/{{ $d['product_images'] }}" alt="" />
                                @if ($d['product_status'] == 'Active')
                                    <span
                                        class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                @else
                                    <span
                                        class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-red-400 ring ring-white"></span>
                                @endif
                            </div>
                            <div class="text-sm">
                                <div class="font-medium text-gray-700">{{ $d['product_name'] }}</div>
                                <div class="text-gray-400">{{ $d['product_brand'] }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span>₹{{ $d['product_price'] }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span>{{ $d['product_quantity'] }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <textarea class="outline-none " name="" id="" cols="30" rows="2" readonly>
                        {{ $d['product_description'] }}
                     </textarea>
                        </td>
                        @if ($d['product_status'] == 'Active')
                            <td class="px-6 py-4" style="width: 200px">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                    <a
                                        href="{{ URL::to('/') }}/status/{{ $d['product_id'] }}">{{ $d['product_status'] }}</a>
                                </span>
                            </td>
                        @else
                            <td class="px-6 py-4" style="width: 200px">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                    <a
                                        href="{{ URL::to('/') }}/status/{{ $d['product_id'] }}">{{ $d['product_status'] }}</a>
                                </span>
                            </td>
                        @endif
                        <td class="px-8 py-4" style="width: 200px">
                            <a x-data="{ tooltip: 'Delete' }" href="{{URL::to('/')}}/admin_delete_product/{{$d['product_id']}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6 stroke-red-600"
                                    x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </td>

                        {{-- <td class="px-6 py-4">{{$d['user_role']}}</td> --}}

                        {{-- <td class="px-6 py-4">
                     <div class="flex justify-end gap-4">
                         <a x-data="{ tooltip: 'Delete' }" href="#">
                             <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="h-6 w-6 stroke-red-600"
                                 x-tooltip="tooltip">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                             </svg>
                         </a>
                     </div>
                 </td> --}}
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="{{URL::to("/")}}/admin/edit_product/{{$d['product_id']}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
