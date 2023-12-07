<div class="row">
    <div class="col-lg-6">
       <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-tshirt"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{ 'APP' }}" name="app" id="app" @if(isset($producto)) value="{{$producto->idapp}}" @endif required>
        </div>
       </div>
    </div> 
    <div class="col-lg-6">
        <div class="form-group">
         <div class="input-group mb-3">
             <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">
                   <i class="fas fa-tshirt"></i>
               </span>
             </div>
             <input type="text" class="form-control" placeholder="{{ 'PRODUCTO' }}" name="producto" id="producto" @if(isset($producto)) value="{{$producto->producto}}" @endif required>
         </div>
        </div>
     </div> 
</div>
<div class="row">
    <div class="col-lg-6">
       <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fas fa-tshirt"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{ 'MODELO' }}" name="modelo" id="modelo" @if(isset($producto)) value="{{$producto->modelo}}" @endif required>
        </div>
       </div>
    </div> 
    <div class="col-lg-6">
        <div class="form-group">
         <div class="input-group mb-3">
             <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">
                   <i class="fas fa-tshirt"></i>
               </span>
             </div>
             <input type="text" class="form-control" placeholder="{{ 'DESCRIPCION' }}" name="descripcion" id="descripcion" @if(isset($producto)) value="{{$producto->descripcion_corta}}" @endif required>
         </div>
        </div>
     </div> 
</div>
