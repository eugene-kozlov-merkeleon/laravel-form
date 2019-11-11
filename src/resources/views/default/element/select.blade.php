<div class="form__element form__element_type_select @if($error) form__element_error @endif {{$class}}">
    <label class="form__label">
        @if (isset($icon['class']))
            <i class="{{$icon['class']}}"
            @if(isset($icon['attributes']))
                @foreach($icon['attributes'] as $iAttrName => $iAttrValue) {{ $iAttrName }}="{{ $iAttrValue }}" @endforeach
            @endif>
            </i>
        @endif
        {{ $label }}
    </label>
    <div class="form__element-container">
        <select @if ($multiple) name="{{ $elementName }}[]" multiple="multiple" @else name="{{ $elementName }}" @endif
                placeholder="{{ $placeholder }}"
                @foreach($attributes as $attributeName => $attributeValue) {{$attributeName}}="{{$attributeValue}}" @endforeach
        >
            @foreach($options as $key => $option)
                <option value="{{$key}}"
                    @if($optionAttributes = array_get($optionsAttributes, $key))
                        @foreach($optionAttributes as $optionAttributeName => $optionAttributeValue) {{$optionAttributeName}}="{{$optionAttributeValue}}" @endforeach
                    @endif
                    @if (($multiple && $value && in_array((string)$key, $value, true)) || $value === (string)$key) selected="selected" @endif>{{ $option }}
                </option>
            @endforeach
        </select>
            <div class="form__help">{{ $help }}</div>
        <div class="form__feedback">{{ $error }}</div>
    </div>
</div>