<x-admin-master>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">

    @section('content')
    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <table id="example1" class="table table-hover text-nowrap table-dark">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Target</th>
                        <th>ATH</th>
                        <th>Favorites</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $element)
                        <tr>
                            <td><a href="{{ route('crypto.show',$element['rank']) }}"
                                    class="btn btn-dark">{{ $element['rank'] }}</a></td>
                            <td><img src="{{ $element['image'] }}" width="40">
                                {{ $element['name'] }}
                            </td>
                            <td>{{ $element['price'] }}</td>
                            <td>{{ $element['target'] }}</td>
                            <td>{{ $element['ath'] }}</td>
                            <td>
                                <a href="{{ route('favorites.store', $element['name']) }}"
                                    class="btn btn-outline-warning crypto-btn">
                                    @if($element['isFav'] > 0)
                                    <i class="fas fa-star"></i>
                                    @else
                                    <i class="far fa-star"></i>
                                    @endif
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>

    @endsection

</x-admin-master>
