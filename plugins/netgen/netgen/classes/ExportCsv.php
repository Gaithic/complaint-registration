<?php namespace Netgen\Netgen\Classes;
use \Netgen\Netgen\Models\Complaint;
use Illuminate\Http\Request;

class ExportCsv{

    public function exportCsv()
{
   
   $fileName = 'complaint.csv';
   $tasks = Complaint::all();
//    $tasks = Complaint::where('status', $status)->orWhere('created_at', $status)->orWhere('complaint_type', $status);
    
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Name', 'Email', 'Contact', 'State Name', 'City', 'Complaint Type', 'Message', 'Registered Date', 'Staus');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['Name']  = $task->name;
                $row['Email']    = $task->Email;
                $row['Contact']    = $task->contact;
                $row['State Name']    = $task->state_name;
                $row['City']    = $task->city;
                $row['Complaint Type']    = $task->complaint_type;
                $row['Message']    = $task->message;
                $row['Registered Date']  = $task->create_at;
                $row['Status']  = $task->status;

                fputcsv($file, array($row['Name'], $row['Email'], $row['Contact'], $row['State Name'], $row['City'], $row['Complaint Type'], $row['Message'], $row['Registered Date'], $row['Status']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}


