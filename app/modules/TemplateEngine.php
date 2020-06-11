<?php
class TemplateEngine
{
    /**
     * テンプレートの表示
     * @param string $file_name ファイル名
     */
    public function show(string $file_name): void
    {
        $var = $this;
        include("../templates/{$file_name}");
    }
}
