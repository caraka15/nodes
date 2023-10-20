<div id="testnet" class="chaind">
</div>
<div class="row">
    <div class="col-md-12">
        <div class="type-header">
            <h2>Testnet</h2>
        </div>

        <div class="chaind-container">
            @foreach ($chainds as $chaind)
                @if ($chaind->type === 'Testnet')
                    @php
                        $rpc_status = @file_get_contents($chaind['rpc_link'] . "/status?");
                        $rpc_status = json_decode($rpc_status);
                    @endphp
            
                    <div class="card">
                        <div class="card-content">
                            <img src="{{ asset('storage/' . $chaind->logo) }}" alt="{{ $chaind->name }}" class="round-image">
                            <h2>{{ $chaind->name }}</h2>
                            <a href="{{ $chaind->stake_link }}" class="btn btn-primary" target="_blank">STAKE</a>
                            <a href="/{{ $chaind->slug }}" class="btn btn-primary" target="_blank">SERVICE</a>
                            @if ($rpc_status && isset($rpc_status->result->sync_info->catching_up) && $rpc_status->result->sync_info->catching_up == false)
                                <div class="dot-active"></div>
                            @else
                                <div class="dot-inactive"></div>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>        
    </div>
</div>
