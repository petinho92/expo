<?php namespace Application\Atoms\Entity;

use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Carbon\Attributes\Field;
use Atomino\Carbon\Attributes\Immutable;
use Atomino\Carbon\Attributes\Protect;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Entity;
use Atomino\Carbon\Model;
use Atomino\Carbon\Attributes\RequiredField;


/**
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison name($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison email($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison neptun($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison mobile($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison major($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison semester($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison programs($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison created($isin = null)
 * @property-read \DateTime|null $created
 * @method static \Atomino\Carbon\Database\Finder\Comparison guid($isin = null)
 * @property-read string|null $guid
 * @method static \Atomino\Carbon\Database\Finder\Comparison lang($isin = null)
 * @method static \Application\Atoms\EntityHelper\_Student_FINDER search( Filter $filter = null )
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Immutable("created", true)]
#[Protect("created", true, false)]
#[RequiredField("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Immutable( 'guid', true )]
#[Protect( 'guid', true, false )]
#[RequiredField('guid', \Atomino\Carbon\Field\StringField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("name", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("name", \Atomino\Carbon\Field\StringField::class)]
#[Validator("email", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("email", \Atomino\Carbon\Field\StringField::class)]
#[Validator("neptun", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>15])]
#[Field("neptun", \Atomino\Carbon\Field\StringField::class)]
#[Validator("mobile", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>20])]
#[Field("mobile", \Atomino\Carbon\Field\StringField::class)]
#[Validator("major", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("major", \Atomino\Carbon\Field\StringField::class)]
#[Validator("semester", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("semester", \Atomino\Carbon\Field\StringField::class)]
#[Field("programs", \Atomino\Carbon\Field\JsonField::class)]
#[Field("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Validator("guid", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>36])]
#[Field("guid", \Atomino\Carbon\Field\StringField::class)]
#[Validator("lang", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>5])]
#[Field("lang", \Atomino\Carbon\Field\StringField::class)]
abstract class _Student extends Entity {
	static null|Model $model = null;
	use \Atomino\Carbon\Plugins\Created\CreatedTrait;
	use \Atomino\Carbon\Plugins\Guid\GuidTrait;
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const name = 'name';
	public string|null $name = null;
	const email = 'email';
	public string|null $email = null;
	const neptun = 'neptun';
	public string|null $neptun = null;
	const mobile = 'mobile';
	public string|null $mobile = null;
	const major = 'major';
	public string|null $major = null;
	const semester = 'semester';
	public string|null $semester = null;
	const programs = 'programs';
	public array $programs = [];
	const created = 'created';
	protected \DateTime|null $created = null;
	protected function getCreated():\DateTime|null{ return $this->created;}
	const guid = 'guid';
	protected string|null $guid = null;
	protected function getGuid():string|null{ return $this->guid;}
	const lang = 'lang';
	public string|null $lang = null;
}





