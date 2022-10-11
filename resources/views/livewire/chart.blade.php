
<div>

  <div class="row">
    <div class="col-6 mb-4">
      <label for="" class="form-label" title="Select Makeable Random Number Limit">Select Limit</label>
      <select wire:model="limit" wire:change="changeData" class="form-control">,
        <option>50</option>
        <option>100</option>
        <option>500</option>
        <option>1000</option>
        <option>10000</option>
      </select>
    </div>
  
    <div class="col-6 mb-4">
      <label for="" class="form-label" title="Select Listable Days Number">Select Day</label>
      <input wire:model="days" wire:change="changeData" type="number" min="1" max="100" class="form-control">
    </div>
  </div>
  
  
    <canvas id="myChart"></canvas>

    
      <button wire:click="changeData" class="btn btn-dark my-3 float-right">Change Data</button>
   
    
    
</div>

@push('script')
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
       const data = {
        labels: @json($labels),
        datasets: @json($datasets)
    };
    const config = {
      type: 'line',
      data: data,
    };

    console.log(@json($datasets))
    const chart = new Chart(ctx,config);

    Livewire.on('changeData', data => {
            chart.data = data;
            chart.update();
        });
</script>
@endpush