{{-- $teachers, $teacher,editTeacher--}}
<x-admin.dashboard>
   <x-teacher.idSearch />
   <x-teacher.addTeacher :teacher="$teacher??false" />
   <x-teacher-list />
</x-admin.dashboard>

