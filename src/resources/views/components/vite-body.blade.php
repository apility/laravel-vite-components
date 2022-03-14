@foreach ($entries as $entry)
  <script
    type="module"
    src="{{ $entry }}"
  ></script>
@endforeach
