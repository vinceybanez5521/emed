@include('partials.header')

        @if (Auth::user()->role === 'admin')
            <div class="d-flex">
                @include('partials.sidebar')

                <div class="wrapper">
                    @include('partials.admin-navbar')
                    
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        @else
            @include('partials.navbar')

            <main>
                @yield('content')
            </main>

            @include('partials.footer')
        @endif    

    </div>

    <!-- Delete Specialty Modal -->
    <div class="modal fade" id="deleteSpecialtyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Specialty</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('admin.specialties.delete')}}" method="POST" class="ms-2 ms-md-3">
                    @csrf
                    @method('DELETE')

                    <div class="modal-body">
                        <p class="text-center">Are you sure you want to delete this specialty?</p>

                        <input type="hidden" name="specialty_id" id="spec_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    @vite(['resources/js/app.js'])
    
</body>
</html>