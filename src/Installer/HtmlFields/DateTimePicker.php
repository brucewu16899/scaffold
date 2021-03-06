<?php namespace zgldh\Scaffold\Installer\HtmlFields;

/**
 * Created by PhpStorm.
 * User: zhangwb-pc
 * Date: 08/31/2017
 * Time: 18:00
 */
class DateTimePicker extends BaseField
{
    public function html()
    {
        $html = <<<HTML
            <el-form-item :label="{$this->getFieldLang(true)}" prop="{$this->getProperty()}" :error="errors.{$this->getProperty()}">
              <el-date-picker
                type="datetime"
                v-model="form.{$this->getProperty()}">
              </el-date-picker>
            </el-form-item>
HTML;

        return $html;
    }

    public function getPlaceholder()
    {
        return $this->getOption('placeholder', '选择日期');
    }

    public function searchHtml()
    {
        $html = <<<HTML
          <el-form-item :label="{$this->getFieldLang(true)}"
            <el-date-picker
                    v-model="searchForm.{$this->getProperty()}"
                    type="datetimerange"
                    clearable
                    column="{$this->getProperty()}"
                    operator="range">
            </el-date-picker>
          </el-form-item>
HTML;

        return $html;
    }
}