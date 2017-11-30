<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bootstrap Select Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Optgroups Example</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<optgroup label="Picnic" data-max-options="2">
							<option>Mustard</option>
							<option>Ketchup</option>
							<option>Relish</option>
						</optgroup>
						<optgroup label="Camping" data-max-options="2">
							<option>Tent</option>
							<option>Flashlight</option>
							<option>Toilet Paper</option>
						</optgroup>
					</select>
					<span class="m-form__help">Select boxes with optgroups</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Multiple Select</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" multiple>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Input Styes</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m-bootstrap-select--pill m_selectpicker" title="Pill style">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m-bootstrap-select--air m_selectpicker" title="Air style">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill m_selectpicker" title="Air & pill style">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m-bootstrap-select--square m_selectpicker" title="Square style">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m-bootstrap-select--solid m_selectpicker" title="Solid style">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Live Search</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
						<option>Hot Dog, Fries and a Soda</option>
						<option>Burger, Shake and a Smile</option>
						<option>Sugar, Spice and all things nice</option>
					</select>
					<span class="m-form__help">You can add a search input by passing <code>data-live-search="true"</code> attribute</span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Key Words</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
						<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
						<option data-tokens="mustard">Burger, Shake and a Smile</option>
						<option data-tokens="frosting">Sugar, Spice and all things nice</option>
					</select>
					<span class="m-form__help">Add key words to options to improve their searchability using <code>data-tokens</code></span>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Limited Selection</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control form-control--fixed m-bootstrap-select m_selectpicker" multiple data-max-options="2" data-width="200">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<select class="form-control form-control--fixed m-bootstrap-select m_selectpicker" multiple data-width="200">
						<optgroup label="Condiments" data-max-options="2">
							<option>Mustard</option>
							<option>Ketchup</option>
							<option>Relish</option>
						</optgroup>
						<optgroup label="Breads" data-max-options="2">
							<option>Plain</option>
							<option>Steamed</option>
							<option>Toasted</option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Placeholder</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" title="Choose one of the following...">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Selected Text</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" title="Choose one of the following...">
						<option title="Combo 1">Hot Dog, Fries and a Soda</option>
						<option title="Combo 2" selected>Burger, Shake and a Smile</option>
						<option title="Combo 3">Sugar, Spice and all things nice</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Selected Text Format</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" multiple data-selected-text-format="count">
						<option title="Combo 1">Hot Dog, Fries and a Soda</option>
						<option title="Combo 2" >Burger, Shake and a Smile</option>
						<option title="Combo 3" selected>Sugar, Spice and all things nice</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" multiple data-selected-text-format="count > 3">
						<option title="Combo 1" selected>Hot Dog, Fries and a Soda</option>
						<option title="Combo 2" >Burger, Shake and a Smile</option>
						<option title="Combo 3">Sugar, Spice and all things nice</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Style Options</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" title="">
						<option class="m--bg-success m--font-inverse-success">Mustard</option>
						<option class="m--bg-warning m--font-inverse-warning">Ketchup</option>
						<option class="m--bg-brand m--font-inverse-brand">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Width Options</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" data-width="auto" title="Auto">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" data-width="fit" title="Fit">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" data-width="200px" title="Fixed: 200px">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" data-width="75%" title="Fixed: 75%">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Icons</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option data-icon="la la-bullhorn">Mustard</option>
						<option data-icon="la la-bookmark">Ketchup</option>
						<option data-icon="la la-calendar-check-o">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Content</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option data-content="<span class='m-badge m-badge--success m-badge--wide m-badge--rounded'>Relish</span>">Mustard</option>
						<option data-content="<span class='m-badge m-badge--warning m-badge--wide m-badge--rounded'>Ketchup</span>">Ketchup</option>
						<option data-content="<span class='m-badge m-badge--brand m-badge--wide m-badge--rounded'>Relish</span>">Relish</option>
						<option data-content="<span class='m-badge m-badge--danger m-badge--wide m-badge--rounded'>Chili</span>">Chili</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Subtext</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Select/deselect all options</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker"multiple data-actions-box="true">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>Mayonnaise</option>
						<option>Barbecue Sauce</option>
						<option>Salad Dressing</option>
						<option>Tabasco</option>
						<option>Salsa</option>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>Mayonnaise</option>
						<option>Barbecue Sauce</option>
						<option>Salad Dressing</option>
						<option>Tabasco</option>
						<option>Salsa</option>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>Mayonnaise</option>
						<option>Barbecue Sauce</option>
						<option>Salad Dressing</option>
						<option>Tabasco</option>
						<option>Salsa</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Divider</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-divider="true"></option>
						<option data-subtext="Sweet">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Menu Header</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" data-header="Select an option">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Disabled</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" disabled>
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Disabled Options</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz" disabled>Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Button States</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker" title="Success" data-style="btn-success">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" title="Warning" data-style="btn-warning">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" title="Danger" data-style="btn-danger">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" title="Brand" data-style="btn-brand">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="m--space-10"></div>
					<select class="form-control m-bootstrap-select m_selectpicker" title="Primary" data-style="btn-primary">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_select_modal">Launch modal examples</a>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-brand">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->
<!--begin::Modal-->
<div class="modal fade" id="m_select_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Bootstrap Touchspin Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Standard Input</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type="text" class="form-control" value="Some value"/>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-bootstrap-select m_selectpicker">
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Optgroups Example</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-bootstrap-select m_selectpicker">
								<optgroup label="Picnic" data-max-options="2">
									<option>Mustard</option>
									<option>Ketchup</option>
									<option>Relish</option>
								</optgroup>
								<optgroup label="Camping" data-max-options="2">
									<option>Tent</option>
									<option>Flashlight</option>
									<option>Toilet Paper</option>
								</optgroup>
							</select>
							<span class="m-form__help">Select boxes with optgroups</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Multiple Select</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-bootstrap-select m_selectpicker" multiple>
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Live Search</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
								<option>Hot Dog, Fries and a Soda</option>
								<option>Burger, Shake and a Smile</option>
								<option>Sugar, Spice and all things nice</option>
							</select>
							<span class="m-form__help">You can add a search input by passing <code>data-live-search="true"</code> attribute</span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-brand m-btn" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-secondary m-btn">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end::Modal-->
<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Validation State Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row has-success">
				<label class="col-form-label col-lg-3 col-sm-12">Success State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-bootstrap-select m_selectpicker">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->