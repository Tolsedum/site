<h3 class="mb-5">{{ __('Project execution plan') }}</h3>
    
<div class="d-flex flex-column mb-3">
    
    @foreach($plane as $key => $data)
    
        @php 
            if($key % 2 != 0){$position = "left";}else{$position = "right";}
        @endphp
            <div class="">
        
                <div class="d-flex flex-row">
                    
                    <div class="p-2 index-tascks-column">
                        @if($position == 'left')
                        <h6 class="text-uppercase" style="width:95%;">@php eval('echo $content_h'.$key.';'); @endphp</h4><br>
                        <span >@php eval('echo $content_'.$key.';'); @endphp</span>
                        @endif
                    </div>

                    <div class="p-2 index-tascks-center @if(!empty($data['active'])) index-tascks-figure-cursor-active @endif">
                        <div class="index-tascks-{{$position}}-figure"></div>
                        <div class="index-tascks-line"></div>
                    </div>

                    <div class="p-2 index-tascks-column">
                        @if($position == 'right')
                            <h6 class="text-uppercase" style="width:95%;">@php eval('echo $content_h'.$key.';'); @endphp</h4><br>
                            <span >@php eval('echo $content_'.$key.';'); @endphp</span>
                        @endif
                    </div>
                </div>

            </div>
              
        
    @endforeach
    
</div>