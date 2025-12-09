// @php
//   /** @var \App\Models\ReportComponent $record */

//   $entities = $record->componentEntities()->orderBy('id')->get();
//   $attributes = $record->componentAttributes()->orderBy('id')->get();

//   // Ambil value berdasarkan ID entity & attribute
//   $values = \App\Models\ComponentValue::query()
//     ->whereIn('entity_id', $entities->pluck('id'))
//     ->whereIn('attribute_id', $attributes->pluck('id'))
//     ->get()
//     ->keyBy(fn($v) => "{$v->entity_id}-{$v->attribute_id}");
// @endphp

// @if ($entities->isEmpty() || $attributes->isEmpty())
//   <p class="text-sm text-gray-500 dark:text-gray-400">
//     Belum ada data untuk ditampilkan.
//   </p>
// @else
//   <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm
//                   dark:border-gray-800 dark:bg-gray-900">

//     <table class="w-full text-sm text-left border-separate border-spacing-0">
//       <thead>
//         <tr>
//           <th class="sticky left-0 z-10 bg-gray-50 dark:bg-white/5
//                                  text-xs font-semibold uppercase tracking-wide text-gray-600 dark:text-gray-300
//                                  px-4 py-3 border-b border-gray-200 dark:border-gray-800 rounded-tl-xl">
//           </th>

//           @foreach ($entities as $entity)
//             <th class="bg-gray-50 dark:bg-white/5
//                                        text-xs font-semibold uppercase tracking-wide text-gray-600 dark:text-gray-300
//                                        px-4 py-3 border-b border-gray-200 dark:border-gray-800">
//               {{ $entity->name }}
//             </th>
//           @endforeach
//         </tr>
//       </thead>

//       <tbody>
//         @foreach ($attributes as $index => $attribute)
//           <tr class="{{ $index % 2 === 0
//           ? 'bg-white dark:bg-gray-900'
//           : 'bg-gray-50 dark:bg-gray-800/40' }}">

//             {{-- Kolom pertama: label baris --}}
//             <th class="sticky left-0 z-10 px-4 py-3 text-xs font-medium
//                            text-gray-800 dark:text-gray-200
//                            border-b border-gray-200 dark:border-gray-800
//                            bg-inherit">
//               {{-- Baris pertama ambil dari komponen, sisanya dari attribute --}}
//               {{ $index === 0 ? $record->name : $attribute->name }}
//             </th>

//             {{-- SEL --}}
//             @foreach ($entities as $entity)
//               @php
//                 $key = "{$entity->id}-{$attribute->id}";
//                 $componentValue = $values[$key] ?? null;

//                 $rawType = $attribute->type ?? 'string';
//                 $type = strtolower($rawType);

//                 $value = null;

//                 if ($componentValue) {
//                   // Tipe string / text
//                   if (in_array($type, ['string', 'text', 'varchar', 'char'])) {
//                     $value = $componentValue->value_string;
//                   }
//                   // Tipe numerik
//                   elseif (
//                     in_array($type, [
//                       'int',
//                       'integer',
//                       'bigint',
//                       'smallint',
//                       'tinyint',
//                       'float',
//                       'double',
//                       'decimal',
//                       'number',
//                       'numeric',
//                       'real'
//                     ])
//                   ) {
//                     $value = $componentValue->value_number;
//                   }
//                   // Tipe waktu / tanggal
//                   elseif (in_array($type, ['date', 'datetime', 'timestamp', 'time'])) {
//                     $value = $componentValue->value_date;
//                   }
//                   // Tipe lain / fallback
//                   else {
//                     $value = $componentValue->value_string
//                       ?? $componentValue->value_number
//                       ?? $componentValue->value_date;
//                   }
//                 }

//                 if ($value instanceof \Illuminate\Support\Carbon) {
//                   $value = $value->toDateTimeString();
//                 }
//               @endphp

//               <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100
//                                  border-b border-gray-200 dark:border-gray-800">
//                 {{ $value }}
//               </td>
//             @endforeach
//           </tr>
//         @endforeach
//       </tbody>

//     </table>

//   </div>
// @endif