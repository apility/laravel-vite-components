@foreach ($entries as $entry)
  <script
    type="module"
    crossorigin
    src="{{ $entry }}"
  ></script>
@endforeach
@foreach ($imports as $import)
  <link
    rel="modulepreload"
    href="{{ $import }}"
  >
@endforeach
@foreach($css as $cssFile)
  <link
    rel="stylesheet"
    href="{{ $cssFile }}"
  >
@endforeach
