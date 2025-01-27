@extends('layout.app')
@section('title')
    visitors
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('visitors.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add visitor +</a>
                <h2 class="text-xl">visitors</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">gender</td>
                        <td class="text-center">age</td>
                        <td class="text-center">email</td>
                        <td class="text-center">name</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($visitors as $visitor)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('visitors.destroy',compact('visitor'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600 cursor-pointer">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('visitors.edit',compact('visitor'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600 cursor-pointer">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$visitor->gender}}</td>
                            <td class="text-center">{{$visitor->age}}</td>
                            <td class="text-center">{{$visitor->email}}</td>
                            <td class="text-center">{{$visitor->name}}</td>
                            <td class="text-center">{{$visitor->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$visitors->links()}}</div>
        </div>
@endsection
