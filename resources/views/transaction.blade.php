@foreach ($user as $u)
@if ($u['id']==$id)


@extends('template')

@section('namaUser')
    {{$u['name']}}
@endsection

@section('level')
    <p class="text-{{$u['colorCode']}}">{{$u['loyalty']}} Level</p>
@endsection

@section('header')
<div class = "button justify-around font-sans flex py-2">
    <div class="flex justify-center  pb-2 px-1">
        <img class="nav w-6 mr-2" src="{{url('/images/user.png')}}" alt="">
        <a class = " " href="\{{$u['id']}}">Profile</a>
    </div>
    <div class="flex pb-2 border-b-2 border-black">
        <img class="nav w-6 mr-2" src="{{url('/images/email.png')}}" alt="">
        <a class = "" href="/transaction/{{$u['id']}}">Transaction</a>
    </div>

</div>
@endsection

@section('konten')
<div class="p-4">
    <p class="flex justify-center text-3xl font-bold pt-4 pb-2 mb-6 border-b-2 border-black">Transaction History</p>
    @foreach ($tr as $t)
        @if($t['user_id']==$id)
            <div class="border-b border-black flex py-2">

                    <img src={{$t->coffee->src}} class="w-1/3" alt="">
                    <div class=" flex flex-col self-end px-2">
                        <p class="font-bold">Purchase Date: {{$t->date}}</p>
                        <p class="font-medium text-lg">{{$t->coffee->name}}</p>
                        <p>Price: Rp{{$t->coffee->num}}</p>
                    </div>
            </div>

        @endif
    @endforeach
</div>
@endsection

@section('footer')
<div class="bg-{{$u['colorCode']}} sticky bottom-0 items-center text-center">
    <p class="text-white p-2 text-sm">@2023 Starbucks Coffee Company, All Right Reserved</p>
</div>
@endsection

@endif
@endforeach
