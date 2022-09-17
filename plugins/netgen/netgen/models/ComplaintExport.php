<?php namespace Netgen\Netgen\Models;


class ComplaintExport extends \Backend\Models\ExportModel {
    public function exportData($columns, $sessionKey = null)
    {
        // $query = Complaint::query();

        // if ($this->created_at_from) {
        //     $query->where('created_at', '>=', $this->created_at_from);
        // }

        // if ($this->created_at_to) {
        //     $query->where('created_at', '<=', $this->created_at_to);
        // }

        
        // $msgs = $query->get();
        
        // $msgs->each(function($msg) use ($columns) {
        //     $msg->addVisible($columns);
        // });
        // return $msgs->toArray();
        $subscribers = Complaint::all();

        $subscribers->each(function($subscriber) use ($columns) {
            $subscriber->addVisible($columns);
        });

        return $subscribers->toArray();
    }
}