@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container mt-5">
        <div>
            <h2 class="mb-5">
                {{ __('Show Time') }}
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">
                            showid
                        </th>

                        <th scope="col" class="text-center">
                            mid
                        </th>

                        <th scope="col" class="text-center">
                            showdate
                        </th>

                        <th scope="col" class="text-center">
                            showtime
                        </th>

                        <th scope="col" class="text-center">
                            theatemo
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($show_times as $index => $show_time)
                        <tr>
                            <th scope="row" class="text-center">
                                {{ $show_time -> showid }}
                            </th>

                            <td class="text-center">
                                {{ $show_time -> mid }}
                            </td>

                            <td class="text-center">
                                {{ $show_time -> showdate }}
                            </td>

                            <td class="text-center">
                                {{ $show_time -> showtime }}
                            </td>

                            <td class="text-center">
                                {{ $show_time -> theaterno }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="mb-5 mt-5">
                {{ __('Show Time on Jun 12') }}
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">
                            showid
                        </th>

                        <th scope="col" class="text-center">
                            mid
                        </th>

                        <th scope="col" class="text-center">
                            showdate
                        </th>

                        <th scope="col" class="text-center">
                            showtime
                        </th>

                        <th scope="col" class="text-center">
                            theatemo
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($show_time_for_jun as $index => $show_jun)
                        <tr>
                            <th scope="row" class="text-center">
                                {{ $show_jun -> showid }}
                            </th>

                            <td class="text-center">
                                {{ $show_jun -> mid }}
                            </td>

                            <td class="text-center">
                                {{ $show_jun -> showdate }}
                            </td>

                            <td class="text-center">
                                {{ $show_jun -> showtime }}
                            </td>

                            <td class="text-center">
                                {{ $show_jun -> theaterno }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="mb-5 mt-5">
                {{ __('Show Time on Jun 12 and Theater T2') }}
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">
                            showid
                        </th>

                        <th scope="col" class="text-center">
                            mid
                        </th>

                        <th scope="col" class="text-center">
                            showdate
                        </th>

                        <th scope="col" class="text-center">
                            showtime
                        </th>

                        <th scope="col" class="text-center">
                            theatemo
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($show_time_for_t2_jun as $index => $show_jun_t2)
                        <tr>
                            <th scope="row" class="text-center">
                                {{ $show_jun_t2 -> showid }}
                            </th>

                            <td class="text-center">
                                {{ $show_jun_t2 -> mid }}
                            </td>

                            <td class="text-center">
                                {{ $show_jun_t2 -> showdate }}
                            </td>

                            <td class="text-center">
                                {{ $show_jun_t2 -> showtime }}
                            </td>

                            <td class="text-center">
                                {{ $show_jun_t2 -> theaterno }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="mb-5 mt-5">
                {{ __('Movie ID for Jun 12 and Jun 13') }}
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            mid
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movie_for_jun_12_and_13 as $index => $show_jun_12_13)
                        <tr>
                            <th>
                                {{ $show_jun_12_13 -> mid }}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="mb-5 mt-5">
                {{ __('Movie ID for Jun 13') }}
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            mid
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movie_for_jun_13 as $index => $movie_jun_13)
                        <tr>
                            <th>
                                {{ $movie_jun_13 -> mid }}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="mb-5 mt-5">
                {{ __('Movie Title for Jun 12') }}
            </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            mtitle
                        </th>

                        <th scope="col">
                            distributor
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movie_title_jun_12 as $index => $movie)
                        <tr>
                            <th>
                                {{ $movie -> movie_title }}
                            </th>

                            <th>
                                {{ $movie -> distributor }}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
