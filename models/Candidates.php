<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidates".
 *
 * @property int $id
 * @property string $fullname
 * @property string $address
 * @property string $email
 * @property string|null $images
 * @property string $website_link
 * @property string $phone
 * @property string $school
 * @property string $university
 * @property string $degree
 * @property string $experience_title
 * @property string $company
 * @property string $from_year
 * @property string $to_year
 * @property string $skill_first
 * @property string $skill_second
 * @property string $skill_third
 * @property string|null $telegram_link
 * @property string|null $instagram_link
 * @property string|null $facebook_link
 * @property string|null $tweetter_link
 * @property int|null $status
 */
class Candidates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'address', 'email', 'website_link', 'phone', 'school', 'university', 'degree', 'experience_title', 'company', 'from_year', 'to_year', 'skill_first', 'skill_second', 'skill_third'], 'required'],
            [['from_year', 'to_year'], 'safe'],
            [['status'], 'integer'],
            [['fullname', 'address', 'email', 'images', 'website_link', 'phone', 'school', 'university', 'degree', 'experience_title', 'company', 'skill_first', 'skill_second', 'skill_third', 'telegram_link', 'instagram_link', 'facebook_link', 'tweetter_link'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'address' => 'Address',
            'email' => 'Email',
            'images' => 'Images',
            'website_link' => 'Website Link',
            'phone' => 'Phone',
            'school' => 'School',
            'university' => 'University',
            'degree' => 'Degree',
            'experience_title' => 'Experience Title',
            'company' => 'Company',
            'from_year' => 'From Year',
            'to_year' => 'To Year',
            'skill_first' => 'Skill First',
            'skill_second' => 'Skill Second',
            'skill_third' => 'Skill Third',
            'telegram_link' => 'Telegram Link',
            'instagram_link' => 'Instagram Link',
            'facebook_link' => 'Facebook Link',
            'tweetter_link' => 'Tweetter Link',
            'status' => 'Status',
        ];
    }
}
