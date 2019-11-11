<div class="form__element form__element_type_submit">
    <div class="form__element-container">
        <button
            @foreach($attributes as $attributeName => $attributeValue)
                @if ($attributeName != 'class') {{ $attributeName }}="{{ $attributeValue }}" @endif
            @endforeach
            class="{{ $buttonClass }} {{ $class }}"type="submit" name="{{$elementName}}" value="1">
            @if (isset($icon['class']))
                <i class="{{$icon['class']}}"
                @if(isset($icon['attributes']))
                    @foreach($icon['attributes'] as $iAttrName => $iAttrValue) {{ $iAttrName }}="{{ $iAttrValue }}" @endforeach
                @endif>
                </i>
            @endif
            {{ $label }}
        </button>
    </div>
</div>