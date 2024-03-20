
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add New Students</h5>
                </div>
                <div class="card-body">
                    @if(session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    @endif

                    <form wire:submit.prevent="storeStudent">
                        <div class="form-group">
                            <label for="student_id">Student Id</label>
                            <input type="number" class="form-control" wire:model="student_id" placeholder="Enter Id number">
                            {{-- for validation --}}
                            @error('student_id')
                                <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" wire:model="name" placeholder="Enter name number">
                            {{-- for validation --}}
                            @error('name')
                                <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" wire:model="email" placeholder="Enter email number">
                            {{-- for validation --}}
                            @error('email')
                                <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" wire:model="phone" placeholder="Enter phone number">
                            {{-- for validation --}}
                            @error('phone')
                                <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary mt-3 w-50">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
