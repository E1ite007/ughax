<?php
$ROP_POPJUMPLR_STACK12 = 0x0101cd14;
$ROP_POPJUMPLR_STACK20 = 0x01024d28;
$ROP_CALLFUNC = 0x0107f82c;
$ROP_CALLR28_POP_R28_TO_R31 = 0x0107d328;
$ROP_POP_R28R29R30R31 = 0x0101d8c4;
$ROP_POP_R27 = 0x0101caf0;
$ROP_POP_R24_TO_R31 = 0x0102042c;
$ROP_CALLFUNCPTR_WITHARGS_FROM_R3MEM = 0x01025360;
$ROP_SETR3TOR31_POP_R31 = 0x0101cc00;

$ROP_memcpy = 0x01035a68;
$ROP_DCFlushRange = 0x01023ee8;
$ROP_ICInvalidateRange = 0x01024010;
$ROP_OSSwitchSecCodeGenMode = 0x010370c0;
$ROP_OSCodegenCopy = 0x010370d8;
$ROP_OSGetCodegenVirtAddrRange = 0x01036fc0;
$ROP_OSGetCoreId = 0x01024e2c;
$ROP_OSGetCurrentThread = 0x010429cc;
$ROP_OSSetThreadAffinity = 0x01042284;
$ROP_OSYieldThread = 0x01041250;
$ROP_OSFatal = 0x01031368;
$ROP_Exit = 0x0101cd70;
$ROP_OSScreenFlipBuffersEx = 0x0103a9d0;
$ROP_OSScreenClearBufferEx = 0x0103aa90;
$ROP_OSDynLoad_Acquire = 0x0102a31c;
$ROP_OSDynLoad_FindExport = 0x0102b790;
$ROP_os_snprintf = 0x0102f09c;
?>
