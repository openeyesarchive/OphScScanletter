
<h4 class="elementTypeName"><?php  echo $element->elementType->name ?></h4>

<table class="subtleWhite normalText">
	<tbody>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('asset_id'))?></td>
			<td><span class="big"><?php echo $element->asset ? $element->asset->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('title'))?></td>
			<td><span class="big"><?php echo CHtml::encode($element->title)?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('description'))?></td>
			<td><span class="big"><?php echo CHtml::encode($element->description)?></span></td>
		</tr>
	</tbody>
</table>
