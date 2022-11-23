@extends('layouts.app')
@section('tittle','LARAPP - All Users')

@section('content')
<div class="text-center">
    <h1 class="flex justify-center my-10 text-2xl items-center text-blue-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
          </svg>
          
        All Users
    </h1>
    <button type="button" class="focus:outline-none text-white w-52  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="" class="flex justify-center items-center gap-2 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
      </svg>
      Add User</a></button>
</div>
    
    
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg p-10   ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center ">
            <tr>
                
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Full NAME
                </th>
                <th scope="col" class="py-3 px-6 md:table-cell hidden">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    PHOTO
                </th>
                <th scope="col" class="py-3 px-6 md:table-cell hidden">
                    ROLE
                </th>
                <th scope="col" class="py-3 px-6">
                    ACTIONS
                </th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td>{{$user->id}}</td>
                    <td>{{$user->fullname}}</td>
                    <td class="md:table-cell hidden">{{$user->email}}</td>
                    <td>
                        <img src="{{$user->photo}}" alt="" class="w-8 h-8 mx-auto "></td>
                    <td class="md:table-cell hidden">{{$user->role}}</td>
                    <td class="flex ">
                        <a href="{{'users/'.$user->id}}" class="mx-auto text-white bg-blue-900 rounded my-2 items-center flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                              </svg>
                              
                        </a>
                        <a href="{{'users/'.$user->id.'/edit'}}" class="mx-auto text-white bg-blue-900 rounded my-2 items-center flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                              </svg>
                              
                        </a>
                        <form action="{{'users'.$user->id}}" method="POST" class="mx-auto text-white bg-red-600 rounded my-2 items-center flex">

                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                  
                            </button>
                        </form>
                    </td>
                    {{-- {{$user->actions}} --}}
                    



                </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="text-center">
                    <div class="flex justify-center items-center py-4">

                        {{ $users->links('pagination::tailwind') }}
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
    
@endsection