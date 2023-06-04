<div class="ms_header">
    <div class="ms_header_inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('search') }}" method="GET" id="search-form">
                        <input type="text"  name="search" value="{{Request::get('search')}}" class="form-control" placeholder="Search for Song, Artists, Playlists and More...">
                        <button type="submit">
                            <i class="fa fa-microphone" style=""></i>
                        </button>
                    </form>
                    <div id="search-results">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    const homeCommandUrl = "{{ route('home') }}";
    const artistCommadUrl = "{{route('artist')}}";
    const albumCommadUrl = "{{route('album')}}";
    const anisCommandUrl = "{{route('music')}}";
</script>

