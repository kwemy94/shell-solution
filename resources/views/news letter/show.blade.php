@extends('dashboard/layouts/layout_dashboard')

{{-- liste des patients de la base de données --}}
@section('dashboard_main')
<div class="main-panel">
    <div class="content">
        <div class="row">
            {{-- <div class="col-md-8"></div> --}}  
            <div class="col-md-11">
                <div class="row" > 
                    <a href="#"> 
                    <button type="submit" class="btn btn-success" style="margin: 0 12px;border-radius: 10px;">Send Message </button>
                    </a>
                    <form action="/news-letter/{{ $newsletter->id }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="margin: 0 10px;border-radius: 10px;">Delete Visitor</button>
                    </form>
                </div>
                {{-- <a href="#" > 
                    <button type="submit" class="btn btn-danger" style="border-radius: 10px;">Send Message </button>
                </a>
                <form action="/news-letter/{{ $newsletter->id }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="border-radius: 10px;">Delete</button>
                </form> --}}
                <div class="card-header ">
                    <h4 class="card-title">Message à {{ $newsletter->email }}</h4>
                    <p class="card-category">Visiteurs / Clients</p>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        
                    </div>  
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop