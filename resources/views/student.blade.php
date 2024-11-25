<div>
    {{$studentModel = new \App\Models\Student;}}
    {{$studentModel->CheckFun();}}
    @foreach ($students as $student)
        {{$student->name}}    
        {{$student->surname}}    
        {{$student->school}}    
    @endforeach
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
