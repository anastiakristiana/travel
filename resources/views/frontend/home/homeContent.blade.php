@extends('frontend.master')

@section('content')

            <div id="slideshow"><div class="fullwidthbanner-container">
                <div class="revolution-slider rev_slider" style="height: 0; overflow: hidden;">
                    <ul>
						@foreach($banners as $row)
                        
						            <!-- SLIDE  -->
                        <!-- Slide1 -->
                        <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src={{$row['image']}}>
                        </li>
                        
                       
						@endforeach
						</ul>
                </div>
            </div></div>
                 	

<!-- @foreach($cities as $row)
{{$row['city_name']}}
{{$row['bandara']}}
@endforeach -->

@endsection

@section('cont')

<div class="col-md-4">
<datalist id="citilis">
@foreach($cities as $row)
<option value={{$row['city_name']}}>{{$row['bandara']}}</option>
@endforeach
<!-- <option value="Mimi dan"/>
<option value="Ucil"/>
<option value="Bembi"/>
<option value="Putih"/> -->
</datalist>
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input id="leaving" list="citilis" type="text" class="input-text full-width" placeholder="city, district or specific airport" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input id="going" list="citilis" type="text" class="input-text full-width" placeholder="city, district or specific airport" />
                                        </div>
										
                                    </div>
									<div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                        <option value="2">afternoon</option>
                                                        <option value="2">evening</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--<div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>-->
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Infants</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">BOOK NOW</button>
                                            </div>
                                        </div>
                                    </div>
	<script type="text/javascript">		
		//autocomplete
			$( function() {
		$.widget( "custom.catcomplete", $.ui.autocomplete, {
		  _create: function() {
			this._super();
			this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
		  },
		  _renderMenu: function( ul, items ) {
			var that = this,
			  currentCategory = "";
			$.each( items, function( index, item ) {
			  var li;
			  if ( item.category != currentCategory ) {
				ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
				currentCategory = item.category;
			  }
			  li = that._renderItemData( ul, item );
			  if ( item.category ) {
				li.attr( "aria-label", item.category + " : " + item.label );
			  }
			});
		  }
		});
		var data = [
		//@foreach($cities as $row)
		  { label: {{$row['bandara']}}, category: {{$row['city_name']}} },
		  //@endforeach
		];
	 
		$( ".input-text" ).catcomplete({
		  delay: 0,
		  source: data
		});
	  } );
	</script>
@endsection