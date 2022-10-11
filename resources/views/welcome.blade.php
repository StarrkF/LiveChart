<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Chart Examples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Live Charts</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card my-5 shadow-lg">
                    <div class="card-title">
                        <h3 class="text-center">Line Chart</h3>
                    </div>
                    <div class="card-body">  
                        @livewire('chart')
                    </div>
                </div>
            </div>
            
        </div> 
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('script')

</body>
</html>