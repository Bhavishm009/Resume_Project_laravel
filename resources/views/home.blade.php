<x-layout>
    <x-slot name='title'>
           Main
    </x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
            <img src="{{asset('images/man1.jpg')}}" alt="profile" class="img-thumbnail" width="250px" height="150px">
            </div>
           <div class="mt-5 text-white mx=5 text-justify">
            <h1 class="fw-bold st-font">Hello , </h1>
            <div class="px-4" style="line-height: 2rem; ">
               
                <p style="text-indent:100px">
                    
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum voluptate inventore eum, illum explicabo distinctio qui nobis et magnam quam libero ea! Ut, dolore quis! Suscipit possimus animi beatae dolorem vero unde dignissimos. Totam dolor quos temporibus facilis error dignissimos, voluptatem, non voluptatum optio, qui perspiciatis? Aut at iste cupiditate tempore tempora cum ipsa minima accusamus eveniet minus! Vero earum architecto dignissimos error quia debitis eveniet modi aperiam explicabo fugit! Dolore voluptatum soluta fugiat perferendis corporis. Eos recusandae nulla aperiam aliquid, nam nihil nisi quas sit ducimus temporibus ut cum! Minus obcaecati facilis eligendi animi, voluptatum nam odit mollitia iste?</p>

            </div>
           </div>
           <div class="text-center">
            <a href="{{route('contact')}}"class='btn btn-outline-warning mx-5 my-3'>Hire Me.</a>
            <a href="{{route('contact')}}" class='btn btn-outline-info mx-5 my-3'>Contact</a>
           </div>
       
        </div>

    </x-slot>
</x-layout>