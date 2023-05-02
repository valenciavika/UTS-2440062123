@extends('template')

@section('namaUser', 'Vika')

@section('header')
<div class = "button justify-around font-sans flex py-2">
    <div class="flex justify-center border-b-2 border-black pb-2 px-1">
        <img class="nav w-6 mr-2" src="{{url('/images/user.png')}}" alt="">
        <a class = " " href="\">Profile</a>
    </div>
    <div class="flex pb-2">
        <img class="nav w-6 mr-2" src="{{url('/images/email.png')}}" alt="">
        <a class = "" href="/vika">Transaction</a>
    </div>

</div>
@endsection

@section('konten')
<div class="p-4 border-b-2 border-black">
    @if ($id == 1)
        <div class="">
            <button type="button" onclick="window.location='{{ url("coffee/1")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg text-white bg-black">Signature</button>
            <button type="button" onclick="window.location='{{ url("coffee/2")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Espresso</button>
            <button type="button" onclick="window.location='{{ url("coffee/3")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Brewed</button>
            <button type="button" onclick="window.location='{{ url("coffee/4")}}'" class="border-black border-2 py-1 px-2 mt-4 font-bold text-lg">Blender Coffee</button>
        </div>
    @elseif ($id == 2)
        <div class="">
            <button type="button" onclick="window.location='{{ url("coffee/1")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Signature</button>
            <button type="button" onclick="window.location='{{ url("coffee/2")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg text-white bg-black">Espresso</button>
            <button type="button" onclick="window.location='{{ url("coffee/3")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Brewed</button>
            <button type="button" onclick="window.location='{{ url("coffee/4")}}'" class="border-black border-2 py-1 px-2 mt-4 font-bold text-lg">Blender Coffee</button>
        </div>
    @elseif ($id == 3)
        <div class="">
            <button type="button" onclick="window.location='{{ url("coffee/1")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Signature</button>
            <button type="button" onclick="window.location='{{ url("coffee/2")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Espresso</button>
            <button type="button" onclick="window.location='{{ url("coffee/3")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg text-white bg-black">Brewed</button>
            <button type="button" onclick="window.location='{{ url("coffee/4")}}'" class="border-black border-2 py-1 px-2 mt-4 font-bold text-lg">Blender Coffee</button>
        </div>
    @elseif ($id == 4)
        <div class="">
            <button type="button" onclick="window.location='{{ url("coffee/1")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Signature</button>
            <button type="button" onclick="window.location='{{ url("coffee/2")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg">Espresso</button>
            <button type="button" onclick="window.location='{{ url("coffee/3")}}'" class="border-black border-2 py-1 px-2 mr-4 font-bold text-lg ">Brewed</button>
            <button type="button" onclick="window.location='{{ url("coffee/4")}}'" class="border-black border-2 py-1 px-2 mt-4 font-bold text-lg text-white bg-black">Blender Coffee</button>
        </div>
    @endif



</div>

<div class="p-4">
    @foreach ($user as $u)
        @if($u['key']==$id)
            <div class="">
                <div class="border-b border-black flex py-2" onclick="return confirm('Are you sure you want to buy 1 {{$u['name']}}?')">
                    <img src={{$u['src']}} class="w-1/3" alt="">
                    <div class=" flex flex-col self-end px-2">
                        <p>Price: {{$u['num']}}</p>
                        <p class="font-medium text-lg">{{$u['name']}}</p>
                    </div>
                </div>

            </div>

        @endif
    @endforeach
</div>



@endsection
