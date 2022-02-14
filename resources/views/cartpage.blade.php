@extends('masterlayout')

@section('container')
<div class="container content my-5 px-5">
    <h2 class="text-center mb-5"> {{ __('E-Book Shopping Cart') }} </h2>
    @if (count($listEbook) !== 0)
        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> {{ __('Title') }} </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listEbook as $item)
                    <tr>
                        <td> {{ $item->ebook->title }} </td>
                        <td> 
                            <form action="/deleteitem" method="POST">
                                @csrf
                                <input type="hidden" name="item" id="item" value="{{ $item->order_id }}">
                                <button type="submit" class="btn btn-danger px-5" > {{ __('Remove') }}</button>
                            </form>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
        <form action="/submitorder" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning px-5" > {{ __('rent') }}</button>
        </form>
    @else
        <h5 class="text-center my-5"> {{ __('you havent rent any book') }} </h5>
    @endif
</div>

@endsection