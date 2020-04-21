<select
  class="form-select {{ $size }} @error($name) is-invalid @enderror"
  name="{{ $name }}"
  {{ $isMultiple ? 'multiple' : ''}}
  {{ $isDisabled ? 'disabled' : ''}}
  {{ $isRequired ? 'required' : ''}}
>

  @foreach ($options as $key => $value)
    <option value="{{ $key }}" {{ $isOptionSelected($key) ? 'selected' : '' }} {{ $isOptionDisabled($key) ? 'disabled' : '' }}>{{ $value }}</option>
  @endforeach

</select>

@if($isDisabled && !empty($values))
  <input type="hidden" name="disabled_{{ $name }}" value="{{ $values }}"/>
@endif