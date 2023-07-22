<div class="content-header">
    <div class="container-fluid mb-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $slot }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active">{{ $slot }}</li>
                </ol>
            </div>
        </div>
    </div>
