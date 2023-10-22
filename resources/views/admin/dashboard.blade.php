@extends('../layouts/admin-side-navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @section('content')
        <!-- component -->
        <div class="overflow-x-auto overflow-y-hidden rounded-lg border border-gray-200 w-full shadow-md m-5">
            <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white px-12">
                <div class="flex justify-between">
                    <div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                        <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                            <div class="flex">
                                <span
                                    class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                    <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                            stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text"
                                class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs  text-gray-500 font-thin"
                                placeholder="Search">
                        </div>
                    </div>
                    <a href="{{ URL::to('/') }}/admin/add-user"
                        class="px-5 py-2 my-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">ADD
                        USER</a>
                </div>

            </div>
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Number</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">City</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">States</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Pincode</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Created Date</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Role</th>
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
                                        src="../profile_pic/{{ $d['user_pic'] }}" alt="" />
                                    @if ($d['user_status'] == 'Active')
                                        <span
                                            class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                    @else
                                        <span
                                            class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-red-400 ring ring-white"></span>
                                    @endif
                                </div>
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $d['user_name'] }}</div>
                                    <div class="text-gray-400">{{ $d['user_email'] }}</div>
                                </div>
                            </th>

                            <td class="px-6 py-4">
                                <span>{{ $d['user_number'] }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span>{{ $d['user_address'] }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span>{{ $d['user_city'] }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span>{{ $d['user_states'] }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span>{{ $d['user_pincode'] }}</span>
                            </td>
                            <td class="px-6 py-4" style="width: 200px">
                                <span>{{ $d['created_at'] }}</span>
                            </td>
                            @if ($d['user_status'] == 'Active')
                                <td class="px-6 py-4" style="width: 200px">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        <a
                                            href="{{ URL::to('/') }}/user_status/{{ $d['user_email'] }}">{{ $d['user_status'] }}</a>
                                    </span>
                                </td>
                            @else
                                <td class="px-6 py-4" style="width: 200px">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                        <a
                                            href="{{ URL::to('/') }}/user_status/{{ $d['user_email'] }}">{{ $d['user_status'] }}</a>
                                    </span>
                                </td>
                            @endif
                            <td class="px-6 py-4">{{ $d['user_role'] }}</td>

                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <a x-data="{ tooltip: 'Delete' }" href="{{URL::to('/')}}/delete_member">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <a x-data="{ tooltip: 'Delete' }" href="{{URL::to('/')}}/edit_member">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                            x-tooltip="tooltip">
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
        {{-- part 2 --}}
        </div>
    @endsection


</body>

</html>
