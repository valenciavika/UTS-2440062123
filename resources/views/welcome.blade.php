@foreach ($user as $u)
    @if ($u['id'] == $id)

    @extends('template')

    @section('namaUser')
        {{$u['name']}}
    @endsection

    @section('level')

        <p class="text-{{$u['colorCode']}}">{{$u['loyalty']}} Level</p>
    @endsection

    @section('header')
    <div class = "button justify-around font-sans flex py-2">
        <div class="flex justify-center border-b-2 border-black pb-2 px-1">
            <img class="nav w-6 mr-2" src="{{url('/images/user.png')}}" alt="">
            <a class = "" href="\{{$u['id']}}">Profile</a>
        </div>
        <div class="flex pb-2">
            <img class="nav w-6 mr-2" src="{{url('/images/email.png')}}" alt="">
            <a class = "" href="/transaction/{{$u['id']}}">Transaction</a>
        </div>

    </div>
    @endsection
    @section('konten')
    <div class="p-4">
        <div class="star">
            <div class="flex">
                <p class="text-3xl text-{{$u['colorCode']}}">{{$u['point']}} </p>
                <p style="color: {{$u['code']}}" class="flex items-center">
                    <i class="fa fa-star fa-lg" ></i>
                </p>
            </div>


            <p class="text-sm">Star balance</p>
            <div class="flex bg-black text-white p-1 px-4 mt-2 rounded-full w-28 justify-center" >
                <a href="">Redeem</a>
                {{-- <button class="bg-black text-white p-1 px-4 mt-2 rounded-full">Redeem</button> --}}
                <p style="color: {{$u['code']}}" class="flex items-center ml-2">
                    <i class="fa fa-star fa-lg" ></i>
                </p>
            </div>


            <div class="bg-gray-300 w-120 h-52 rounded-2xl mt-3" >
                <img class="w-120 rounded-2xl" src="https://www.starbucksathome.com/id/sites/default/files/styles/homepage_banner_xlarge/public/2022-05/ID_SBUX_Website_Home-page_Banner_2880pxby1660px_220425_1.jpg?h=13c93c63&itok=oq2N7pbs" alt="">
            </div>
        </div>

        <div class="">
            <p class="font-bold text-lg pt-4">Promo Information</p>
            <div class="flex py-4 border-black border-b">
                <div class=" bg-gray-300">
                    <img class="w-28 h-28" src="https://foto.kontan.co.id/SkYy2ILDmXmpUZwEcXrqk8abCHI=/smart/filters:format(webp)/2022/03/03/678159470p.jpg" alt="">
                </div>
                <div class="w-4/5 pl-2">
                    <h2 class="text-lg font-medium">Buy 1 Get 1 Coffee</h2>
                    <p class="text-sm">Looking for a delicious and affordable way to start your day? Look no futher than our "buy 1 get 1" coffeee promotion!</p>
                </div>
            </div>
            <div class="flex py-4 border-black border-b">
                <div class="bg-gray-300 ">
                    <img class="w-28 h-28 " src="https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648540841.jpg" alt="">
                </div>
                <div class="w-4/5 pl-2">
                    <h2 class="text-lg font-medium">Tumblers Day</h2>
                    <p class="text-sm">Celebrate Tumbler Day with us and get your hands on the perfect reusable cup to keep your drinks hot or cold all day long. Don't miss out on this limited time offer!</p>
                </div>
            </div>
            <div class="flex pt-4">
                <div class="bg-gray-300 ">
                    <img class="w-28 h-28 " src="https://pbs.twimg.com/media/EJDhDmVVAAAF_It.jpg" alt="">
                </div>
                <div class="w-4/5 pl-2">
                    <h2 class="text-lg font-medium">30% Off Tumbler Discount</h2>
                    <p class="text-sm">Thirsty for a great deal? Get 30% off on a purchase on tumber! Hurry, limited time offer only. Order now and enjoy your favoite drinks in style.</p>
                </div>
            </div>
    <a href="/coffee/{{$u['id']}}/1" class="fixed bg-{{$u['colorCode']}} text-white text-center float px-3 py-2 rounded-lg font-medium text-lg bottom-16 right-6">Coffee</a>
        </div>
    </div>

    @endsection

    @section('footer')
    <div class="bg-{{$u['colorCode']}} sticky bottom-0 items-center text-center">
        <p class="text-white p-2 text-sm">@2023 Starbucks Coffee Company, All Right Reserved</p>
    </div>
    @endsection

    @endif
@endforeach
