<?php
/**
 * Created by PhpStorm.
 * User: quoyle
 * Date: 2017/9/29
 * Time: 上午11:40
 */

namespace Library\Tools;


class Common
{
    public static function jsonDecode($json, $toArray = true)
    {
        return json_decode($json, $toArray, 512, JSON_BIGINT_AS_STRING);
    }


    /**
     * 处理插入数据库字段值
     * @param array $data
     */
    public static function transform2DbData(array &$data)
    {
        foreach ($data as &$item) {
            if (is_array($item) || is_object($item)) {
                $item = json_encode($item);
            }
        }
    }

    /**
     * 生成文件目录
     * @param $file_name
     * @return string
     */
    public static function getFileDir($file_name)
    {
        return  substr($file_name, 0, 2).'/'.substr($file_name, 2, 2).'/';
    }

    /**
     * 创建目录
     * @param $path
     */
    public static function mkdir($path)
    {
        $path_info = pathinfo($path);

        if (!is_dir($path_info['dirname'])){
            \File::makeDirectory($path_info['dirname'], 0777, true);
        }
    }

    /**
     * 移动文件
     * @param $from
     * @param $to
     */
    public static function move($from, $to)
    {
        self::mkdir($to);
        \File::move($from, $to);
    }

    /**
     * 删除文件
     * @param $path
     */
    public static function delFile($path)
    {
        \File::delete($path);
    }
}