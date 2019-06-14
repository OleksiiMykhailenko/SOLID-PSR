<?php

//Hint - use Single Responsibility Principle Violation

class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }
    public function getDate()
    {
        return '2016-04-21';
    }
}

//Перемещение операции сохранения в другой класс

class GetContents
{
    public function getContents(Report $report)
    {
        $filename = '/reportings/' . $report->getTitle() . ' - ' . $report->getDate();
        file_put_contents($filename, serialize($report));
    }
}

class Format
{
    public function formatJson()
    {
        return json_encode($this->getContents());
    }
}