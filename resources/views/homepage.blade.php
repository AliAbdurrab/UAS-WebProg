@extends('masterlayout')

@section('container')
    <style>
        #bg-img{
            height: 50rem;
            background-size: cover;
            background-image: url({{ URL::asset('images/background/bgbook.jpg') }});
        }
        
    </style>

    @auth
        <div class="container py-5 px-5 table-content my-5">
            <h2 class="text-center mb-5"> {{ __('this is our E-Book list') }} </h2>
            <table class="table table-light">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col"> {{ __('Author') }}</th>
                      <th scope="col"> {{ __('Title') }} </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listEbook as $item)
                        <tr>
                            <td> {{ $item->author }} </td>
                            <td> <a href="/ebook-detail/{{ $item->ebook_id }}">{{ $item->title }}</a></td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div id="bg-img" class="d-flex flex-column align-items-center justify-content-center text-center h-10">
            <h2 class="title-center text-dark"> {{ __('choose and rent your e-book now!!') }} </h2>
            <h5 class="text-dark"> {{ __('this is the biggest place for you to rent your e-book') }}</h5>
            <h5 class="text-dark"> {{ __('Designed by Ali Abdurrab - 2301926996') }}</h5>
        </div>
    @endauth
@endsection
